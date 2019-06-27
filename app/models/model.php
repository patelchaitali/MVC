<?php

class db
{
    protected $db='';
    public function __construct($config=array())
    {
        include_once('app/core/config.php');
        $host=isset($config['host']) ? $config['host'] : 'localhost1';
        $username = isset($config['username']) ? $config['username'] : 'root';
        $password = isset($config['password']) ? $config['password'] : 'root';
        $dbname = isset($config['dbname']) ? $config['dbname'] : 'schoolmgt';

        $this->db = new mysqli($host, $username, $password, $dbname) ;
        if ($this->db->connect_errno) {
            printf("Database connection failed: %s\n", $this->db->connect_error);
            exit();
        }
    }
    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function count_rows()
    {
        return $this->result->num_rows;
    }

    public function list_all($table, $condition)
    {
        $statement = "select * from ".$table. " where deleted=0 ";
        if (isset($condition)) {
            $statement .= "  and ".$condition;
        }

        $this->result = $this->query($statement);
        $list = array();
        if ($this->result) {
            // Cycle through results
            while ($row = $this->result->fetch_object()) {
                $list[] = $row;
            }
            // Free result set
            return $list;
            $this->result->close();
        }
    }

    public function update($list, $id)
    {
        $uplist = ''; //update fields

        $where = 0;   //update condition, default is 0

        foreach ($list as $k => $v) {




                    // If not PK, construct update list

            $uplist .= "`$k`='$v'".",";
        }

        // Trim comma on the right of update list

        $uplist = rtrim($uplist, ',');

        // Construct SQL statement

        $statement = "UPDATE `student` SET {$uplist} WHERE id=".$id;



        if ($this->query($statement)) {

            // Insert succeed, return the last record’s id

            return true;

        //return true;
        } else {

            // Insert fail, return false

            return false;
        }
    }
    public function insert($data)
    {
        $field_list = '';

        $value_list = '';  //value list string

        foreach ($data as $k => $v) {
            $field_list .= "`".$k."`" . ',';

            $value_list .= "'".$v."'" . ',';
        }

        // Trim the comma on the right

        $field_list = rtrim($field_list, ',');

        $value_list = rtrim($value_list, ',');

        // Construct sql statement

        $statement = "INSERT INTO `student` ({$field_list}) VALUES ($value_list)";

        if ($this->query($statement)) {

            // Insert succeed, return the last record’s id

            return true;

        //return true;
        } else {

            // Insert fail, return false

            return false;
        }
    }

    public function delete($id)
    {
        $statement = "update `student` set deleted =1 where id =".$id;

        if ($this->query($statement)) {

            // Insert succeed, return the last record’s id

            return true;

        //return true;
        } else {

            // Insert fail, return false

            return false;
        }
    }
}
