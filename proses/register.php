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
    $_SESSION['notif'] = 'Maaf pendaftaran gagal, karena username sudah terdaftar!';
    header("Location: ../register.php");
    die();
}


//Validasi Password
if ($password !== $ulang_password) {
    $_SESSION['notif'] = 'Maaf pendaftaran gagal, karena password dengan password yang diulangi tidak sama!';
    header("Location: ../register.php");
    die();
}


$sql = "INSERT INTO `pengguna`(`username`, `nama`, `email`, `password`) VALUES ('$username','$nama','$email','$password')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['notif'] = 'Pendaftaran berhasil silahkan login!';
    header("Location: ../login.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
