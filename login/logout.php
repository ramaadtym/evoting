<?php
include "../config.php";
session_start();
session_destroy();
$alamat = "../home.php";
header("location:$alamat");
?>