<?php
include"../config.php";
session_start();
$user = $_POST["user"];
$sandi = $_POST["pass"];


//Ambil Data dari Database
$cekuser = mysqli_query($konek,"SELECT * FROM register WHERE username = '$user'");
//Verifikasi Username
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Tidak Terdaftar!<br/>";
echo "<a href='home.php'>Back</a>";
} 
else {
if($sandi <> $hasil['pass']) {
header('Location:../home.php');
exit;
}
else {$_SESSION['username'] = $hasil['username'];
header('location:status.php');}

}

?>