<?php 
// header ("location:tabel_customer.php");
include 'view_table.php'

?>

<center>
  <h2>Form Edit Kendaraan</h2>
  <form action="edit-data-order.php?vehicleId=<?php echo $_GET['vehicleId'];?>" method="post">
    <div class="form-group">
      <label for="model">Model</label>
      <input type="model" class="form-control" name="model" placeholder="model" required>
    </div>
    <div class="form-group">
      <label for="year">Year</label>
      <input type="year" class="form-control" name="year" placeholder="year" required>
    </div>
    <div class="form-group">
    <label for="manufactur">Manufacture</label>
    <input type="manufactur" class="form-control" name="manufactur" placeholder="manufactur" required>
  </div>
  <div class="form-group">
  <label for="price">Price</label>
  <input type="price" class="form-control" name="price" placeholder="price" required>
</div>
<div class="selecter">
<label for="type">choose type</label>
<select class="form-control" name="type_vec" required>
    <option value="">Select Type</option>
    <option value="../form_input/motor.php">Motor</option>
    <option value="../form_input/mobil.php">Mobil</option>
    <option value="../form_input/truk.php">Truck</option>
    </select>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
      $selectedType = $_POST["type_vec"];
  
      if (!empty($selectedType)) {
          // Redirect based on the selected type
          header("Location: " . $selectedType);
          exit();
      } else {
          // Handle the case where no type is selected (optional)
          echo "Please select a type.";
      }
  }
    ?>
    
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</center>


