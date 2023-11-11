<?php
include '../auth/koneksi.php';

$vehicleId=$_GET['vehicleId'];
$wheelCount=$_POST['wheelCount'];
$cargoAreaSize=$_POST['cargoAreaSize'];

$query_vec = mysqli_query($mysqli, "INSERT INTO truk (wheelCount,cargoAreaSize) VALUES ($wheelCount,$cargoAreaSize)");

// header ("location:tabel_customer.php");
?>