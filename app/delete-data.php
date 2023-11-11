<?php 
include '../auth/koneksi.php';
$customerId		=$_GET['customerId'];
$query = mysqli_query($mysqli, "DELETE FROM customer WHERE customerId='$customerId'");


header ("location:tabel_customer.php");

?>