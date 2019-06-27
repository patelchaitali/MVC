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
      <label for="validationCustom01">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Product Name" value="<?php if (isset($name)) {
    echo $name;
} ?>" required>
      <div class="invalid-feedback">
       Enter Name
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Part Number</label>
      <input type="text" class="form-control" name="part_number" placeholder="Part Number" value="<?php if (isset($part_number)) {
    echo  $part_number;
} ?>" required>
      <div class="invalid-feedback">
        Enter Part Number
      </div>
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Stock Quantity</label>
      <input type="number" class="form-control" name="stock_quantity" placeholder="Stock Quantity" value="<?php if (isset($stock_quantity)) {
    echo  $stock_quantity;
} ?>"  required>
      <div class="invalid-feedback">
        Enter Quantity
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">VAT rate.(%)</label>
      <input type="number" class="form-control" name="vat_rate" placeholder="VAT rate" value="<?php if (isset($vat_rate)) {
    echo $vat_rate;
} ?>" required>
      <div class="invalid-feedback">
        Please provide a valid VAT rate.
      </div>
    </div>

  </div>

<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Cost Price </label>
      <input type="number" class="form-control" name="cost_price" placeholder="Cost Price" value="<?php if (isset($cost_price)) {
    echo $cost_price;
} ?>" required>
      <div class="invalid-feedback">
        Enter Cost Price
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Selling Price</label>
      <input type="number" class="form-control" name="selling_price" placeholder="Selling Price" value="<?php if (isset($selling_price)) {
    echo  $selling_price;
} ?>" required>
      <div class="invalid-feedback">
        Enter Selling Price
      </div>
    </div>

  </div>

<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Description</label>
      <textarea rows="4" cols="50" class="form-control" name="description" placeholder="Description" required><?php if (isset($description)) {
    echo  $description;
} ?></textarea>
      <div class="invalid-feedback">
        Enter Description
      </div>
    </div>
    <div class="col-md-6 mb-3">
		<label for="validationCustom03">image</label>
       <input type="file" accept="image/*" class="form-control" id="image" name="image" required>

    <div class="invalid-feedback">Select image</div>
    </div>

  </div>


  <button class="btn btn-primary" id="submit" name="submit" type="submit">Cancel</button>
	<input type="hidden" name="id" value="<?php if (isset($id)) {
    echo  $id;
} ?>" />
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
