<?php

include("../config.php");

$username = $_POST['username'];
$password = $_POST['password'];


//Validasi Username
$sql = "SELECT * FROM pengguna WHERE username = '$username'";
$result = $conn->query($sql);
$result = $result->fetch_assoc();

if ($result == NULL) {
    header("Location: ../login.php");
}

//Validasi Password
if ($password != $result['password']) {
    header("Location: ../login.php");
} else {
    header("Location: ../index.php");
}
