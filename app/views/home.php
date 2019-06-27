<?php
include('header.php');
include('nav.php');
?>

<div class="container-fluid">
	<h3>List of Students</h3>
<div class="table-responsive">
            <table class="table table-striped table-sm table-bordered">
              <thead align="center">
                <tr>
                  <th>No</th>
                  <th>Image</th>
					<th>Student Name</th>
                  <th>Father Name</th>
                    <th>Roll Number</th>
                  <th>Mobile No.</th>
                  <th>Class</th>
					<th>Date of Birth</th>
					<th> </th>
                </tr>
              </thead>
              <tbody align="center">
			<?php foreach ($data as $row) {
    ?>
                <tr>
                    <td><?php if (isset($row->id)) {
                            echo $row->id;
                         } ?></td>
                    <td><img src="<?php if (isset($row->image)) {
                            echo 'public/upload/'.$row->image;
                        } ?>" alt="<?php if (isset($row->sname)) {
                            echo $row->sname;
                        } ?>" class="img-thumbnail  mx-auto d-block" width="100" height="100"></td>

                    <td><?php if (isset($row->sname)) {
                            echo $row->sname;
                        } ?></td>
                    <td><?php if (isset($row->father_name)) {
                            echo $row->father_name;
                        } ?></td>
					<td><?php if (isset($row->roll_no)) {
                            echo $row->roll_no;
					    } ?></td>
					<td><?php if (isset($row->mobile_no)) {
					        echo $row->mobile_no;
                        } ?></td>
					<td><?php if (isset($row->class)) {
                            echo $row->class;
                        } ?></td>
					<td><?php if (isset($row->dob)) {
                            echo $row->dob;
                        } ?></td>

					<td>
            <a href="edit/<?php echo $row->id; ?>" class="btn btn-info" role="button">Edit</a>
            <a href="delete/<?php echo $row->id; ?>" class="btn btn-danger" role="button" data-toggle="confirmation" data-title="Are you sure?"
            >Delete</a>
            <a href="view/<?php echo $row->id; ?>" class="btn btn-info" role="button">View</a>
          </td>
                </tr>
 
				  <?php
} ?>

              </tbody>
            </table>
          </div>
</div>
  </body>
</html>
