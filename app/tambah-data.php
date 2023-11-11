<?php 
include '../auth/koneksi.php';

$query = mysqli_query($mysqli, "INSERT INTO customer (name, address, phoneNumber, idCard) 
VALUES ('', '', '', '')");

header ("location:tabel_customer.php");

?>