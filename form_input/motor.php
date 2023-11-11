<?php
include '../auth/koneksi.php';

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form processing logic here...

    // Redirect to the edit page after processing the form
    header("Location: ../edit/edit_motor.php?vehicleId=" . $_GET['vehicleId']);
    exit(); // Make sure to call exit() after header to prevent further execution
}

$query_vec = mysqli_query($mysqli, "SELECT * FROM motor ");
$numb = 0; // Initialize the variable outside of the loop
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" width=50%>

<center>
  <h2>Form Motor</h2>
  <form action="../edit/edit_motor.php?vehicleId=" . $_GET['vehicleId']"" method="post">
 <!-- Remove the action attribute to submit to the same page -->
    <div class="form-group">
      <label for="cargoSize">Cargo Size</label>
      <input type="cargoSize" class="form-control" id="cargoSize" name="cargoSize" placeholder="cargoSize" required>
    </div>
    <div class="form-group">
      <label for="fuelCapacity">Fuel Capacity</label>
      <input type="fuelCapacity" class="form-control" id="fuelCapacity" name="fuelCapacity" placeholder="fuelCapacity" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</center>
