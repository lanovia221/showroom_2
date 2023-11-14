<?php
include '../auth/koneksi.php';

$vehicleId	= $_GET['vehicleId'];

$model		=$_POST['model'];
$year		=$_POST['year'];
$passengers =$_POST['passengers'];
$manufactur =$_POST['manufactur'];
$price		=$_POST['price'];

$query = mysqli_query($mysqli, "UPDATE vehicle SET model='$model', year='$year', passengers='$passengers',manufactur='$manufactur',price='$price' WHERE vehicleId='$vehicleId'");


// if(!$passengers){
// 	die("error");
// }else{
// 	echo "nice";
// }

header ("location:tabel_order.php");
?>