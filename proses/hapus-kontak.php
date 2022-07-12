<?php

include('../config.php');

$id = $_GET['id'];

$sql = "DELETE FROM `kontak` WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
    $_SESSION['notif'] = 'Selamat kamu berhasil menghapus data kontak!';
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
