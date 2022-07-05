<?php

include("../config.php");

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$ulang_password = $_POST['ulang_password'];

//Ambil Username
$sql = "SELECT * FROM pengguna WHERE username = '$username'";
$result = $conn->query($sql);
$result = $result->fetch_assoc();

if ($result != NULL) {
    header("Location: ../register.php");
}


//Validasi Password
if ($password !== $ulang_password) {
    header("Location: ../register.php");
}


$sql = "INSERT INTO `pengguna`(`username`, `nama`, `email`, `password`) VALUES ('$username','$nama','$email','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
