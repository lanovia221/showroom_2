<?php
include '../auth/koneksi.php';

$vehicleId=$_GET['vehicleId'];
$cargoSize=$_POST['cargoSize'];
$fuelCapacity=$_POST['fuelCapacity'];

$query_vec = mysqli_query($mysqli, "INSERT INTO motor (cargoSize,fuelCapacity) VALUES ($cargoSize,$fuelCapacity)");

// header ("location:tabel_customer.php");
?>