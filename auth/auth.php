<?php
include 'koneksi.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    $query = mysqli_query($mysqli, "SELECT * FROM customer WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        header('location: ../app/index.php');
    } else {
        header('location: ../index.php?pesan=error');
    }
}
?>
