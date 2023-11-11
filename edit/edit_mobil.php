<?php
include '../auth/koneksi.php';

$vehicleId=$_GET['vehicleId'];
$fuelType=$_POST['fuelType'];
$trunkSize=$_POST['trunkSize'];

$query_vec = mysqli_query($mysqli, "INSERT INTO mobil (fuelType,trunkSize) VALUES ($fuelType,$trunkSize)");

// header ("location:tabel_customer.php");
?>