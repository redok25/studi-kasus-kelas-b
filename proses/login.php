<?php

include("../config.php");

$username = $_POST['username'];
$password = $_POST['password'];


//Validasi Username
$sql = "SELECT * FROM pengguna WHERE username = '$username'";
$result = $conn->query($sql);
$result = $result->fetch_assoc();

if ($result == NULL) {
    $_SESSION['notif'] = 'Login gagal, karena username tidak terdaftar!';
    header("Location: ../login.php");
    die();
}

//Validasi Password
if ($password != $result['password']) {
    $_SESSION['notif'] = 'Login gagal, karena password salah!';
    header("Location: ../login.php");
    die();
} else {
    $_SESSION['user'] = $result;
    $_SESSION['notif'] = 'Login berhasil!';
    header("Location: ../index.php");
}
