<?php
include('header.php');
include('nav.php');
?>
<p></p>  
<div class="container" style="background-color: #f8f9fa;">
	 <h3><?php echo $form; ?></h3>
<form class="needs-validation col-md-12" novalidate action="/MVC/update" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Student Name</label>
      <input type="text" class="form-control" name="sname" placeholder="Student Name" value="<?php if(isset($sname)){ echo $sname;} ?>" required>
      <div class="invalid-feedback">
       Enter Name
      </div>
    </div>
      <div class="col-md-6 mb-3">
          <label for="validationCustom01">Father Name</label>
          <input type="text" class="form-control" name="father_name" placeholder="Father Name" value="<?php if(isset($father_name)){ echo $father_name;} ?>" required>
          <div class="invalid-feedback">
              Enter Name
          </div>
      </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Roll Number</label>
      <input type="text" class="form-control" name="roll_no" placeholder="Roll Number" value="<?php if(isset($roll_no)){echo  $roll_no;} ?>" required>
      <div class="invalid-feedback">
        Enter Roll Number
      </div>
    </div>
      <div class="col-md-6 mb-3">
          <label for="validationCustom03">Class</label>
          <input type="text" class="form-control" name="class" placeholder="Class" value="<?php if(isset($class)){ echo $class;} ?>" required>
          <div class="invalid-feedback">
              Enter Class
          </div>
      </div>
  
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date of Birth</label>
      <input type="date" class="form-control" name="dob" placeholder="Date of Birth" value="<?php if(isset($dob)){echo  $dob;} ?>"  required>
      <div class="invalid-feedback">
        Enter Date of Birth
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Mobile Number</label>
      <input type="number" class="form-control" name="mobile_no" placeholder="Mobile Number" value="<?php if(isset($mobile_no)){echo $mobile_no;} ?>" required>
      <div class="invalid-feedback">
        Please provide a valid VAT rate.
      </div>
    </div>
 
  </div>
	
<div class="form-row">

   
  </div>
		
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Address</label>
      <textarea rows="4" cols="50" class="form-control" name="address" placeholder="Address" required><?php if(isset($address)){echo  $address;} ?></textarea>
      <div class="invalid-feedback">
        Enter Address
      </div>
    </div>
    <div class="col-md-6 mb-3">
		<label for="validationCustom03">image</label>
       <input type="file" accept="image/*" class="form-control" id="image" name="image" required>
    
    <div class="invalid-feedback">Select image</div>
    </div>
   
  </div>	
	
  
  <button class="btn btn-primary" id="submit" name="submit" type="submit">Save</button>
	<input type="hidden" name="id" value="<?php if(isset($id)){echo  $id;} ?>" />
</form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>