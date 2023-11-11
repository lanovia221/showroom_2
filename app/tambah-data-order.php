<?php 
include '../auth/koneksi.php';

$query_vec = mysqli_query($mysqli, "INSERT INTO vehicle (model,year,passengers,manufactur,price) 
VALUES ('', '', '', '','')");

header ("location:tabel_order.php");


?>