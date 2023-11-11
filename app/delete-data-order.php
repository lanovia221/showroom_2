<?php 
include '../auth/koneksi.php';
$vehicleId		=$_GET['vehicleId'];
$query = mysqli_query($mysqli, "DELETE FROM vehicle WHERE vehicleId='$vehicleId'");


header ("location:tabel_order.php");
?>