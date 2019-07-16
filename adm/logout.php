<?php
include "../config.php";
session_start();
session_destroy();
$alamat = "login.php";
header("location:$alamat");
?>