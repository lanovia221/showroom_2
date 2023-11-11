<?php
include '../auth/koneksi.php';

$query_mobil = mysqli_query($mysqli, "SELECT * FROM mobil ");
$numb = 0; // Initialize the variable outside of the loop
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" width=50%>

<center>
  <h2>Form Mobil</h2>
  <form action="edit-mobil.php??vehicleId=<?php echo $_GET['vehicleId'];?>" method="post">
    <div class="form-group">
      <label for="fuelType">Fuel Type</label>
      <input type="cargoSize" class="form-control" id="fuelType" name="fuelType" placeholder="fuelType" required>
    </div>
    <div class="form-group">
      <label for="trunkSize">Trunk Size</label>
      <input type="trunkSize" class="form-control" id="trunkSize" name="trunkSize" placeholder="trunkSize" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  
  </form>