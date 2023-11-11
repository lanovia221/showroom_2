
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" width=50%>

<center>
  <h2>Form Truck</h2>
  <form action="edit-data.php?customerId=<?php echo $_GET['customerId'];?>" method="post">
    <div class="form-group">
      <label for="wheelCount">Wheel Count</label>
      <input type="wheelCount" class="form-control" id="wheelCount" name="wheelCount" placeholder="wheelCount" required>
    </div>
    <div class="form-group">
      <label for="cargoAreaSize">Cargo Size Area</label>
      <input type="cargoAreaSize" class="form-control" id="cargoAreaSize" name="cargoAreaSize" placeholder="cargoAreaSize" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</center>