<?php 
// header ("location:tabel_customer.php");

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" width=50%>

<center>
  <h2>Form Edit Data</h2>
  <form action="edit-data.php?customerId=<?php echo $_GET['customerId'];?>" method="post">
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
      <label for="inputPhoneNumber">Phone Number</label>
      <input type="text" class="form-control" id="inputPhoneNumber" name="phoneNumber" required>
    </div>
    <div class="form-group">
      <label for="inputIdCard">Id Card</label>
      <input type="text" class="form-control" id="inputIdCard" name="idCard" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</center>


