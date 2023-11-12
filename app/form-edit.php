<?php 
// header ("location:tabel_customer.php");
include 'view_table.php';
?>

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


