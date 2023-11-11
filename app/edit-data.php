<?php
include '../auth/koneksi.php';
$customerId=$_GET['customerId'];
$name=$_POST['name'];
$address=$_POST['address'];
$phoneNumber=$_POST['phoneNumber'];
$idCard=$_POST['idCard'];

$query = mysqli_query($mysqli, "UPDATE customer SET name='$name', address='$address', phoneNumber='$phoneNumber', 
idCard='idCard' WHERE customerId=$customerId");


header ("location:tabel_customer.php");
?>