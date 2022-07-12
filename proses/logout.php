<?php
include('../config.php');

unset($_SESSION['user']);

$_SESSION['notif'] = 'Kamu berhasil logout!';

header("Location: ../login.php");

die();
