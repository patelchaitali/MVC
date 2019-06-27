<?php

require_once('app/models/model.php');

class Home
{
    private $model;
    public function __construct()
    {
        $this->model= new db;
    }
    public function index()
    {
        $data=$this->model->list_all('student', null);
        $num_products=$this->model->count_rows();
        //print_r($data);
        include_once('app/views/home.php');
    }

    public function delete($id)
    {
        $del=$this->model->delete($id);
        header('Location: '.$_SERVER['PHP_SELF']);
    }
    public function edit($id)
    {
        $data=$this->model->list_all('student', 'id ='.$id);


        foreach ($data as $row) {
            $sname= isset($row->sname) ? $row->sname :'';
            $father_name= isset($row->father_name) ? $row->father_name :'';
            $roll_no=	 isset($row->roll_no) ? $row->roll_no:'';
            $dob=	 isset($row->dob) ? $row->dob:'';
            $address= isset($row->address) ?  $row->address : '';
            $mobile_no= isset($row->mobile_no) ? $row->mobile_no: '';
            $class= isset($row->class) ? $row->class :'';

        }
        $form='Edit '.$sname ;

        include_once('app/views/edit.php');
    }


    public function create()
    {
        $form='Create';
        include_once('app/views/edit.php');
    }

    public function view()
    {
        $form='View';
        include_once('app/views/view.php');
    }


    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], "public/upload/" . $_POST['roll_no'].$_FILES["image"]["name"])) {
                $data = array(
                      'sname' =>$_POST['sname'],
                      'father_name' =>$_POST['father_name'],
                      'roll_no' =>$_POST['roll_no'],
                      'dob' =>$_POST['dob'],
                      'address' => $_POST['address'],
                      'image' => $_POST['roll_no'].$_FILES["image"]["name"],
                      'mobile_no' => $_POST['mobile_no'],
                      'class' => $_POST['class'],

                       );
                if ($_POST['id']) {
                    $this->model->update($data, $_POST['id']);
                } else {
                    $this->model->insert($data);
                }
            }
        }
        return $this->index();
    }
}
