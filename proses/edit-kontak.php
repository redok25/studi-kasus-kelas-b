<?php

include('../config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE `kontak` SET `nama`='$nama',`no_hp`='$no_hp',`alamat`='$alamat' WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
    $_SESSION['notif'] = 'Selamat kamu berhasil mengubah data kontak!';
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
