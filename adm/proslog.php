<?php
include("../config.php");
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];

//Ambil Data dari Database
$cekuser = mysql_query("SELECT * FROM admin WHERE username = '$user'");
//Verifikasi Username
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Tidak Terdaftar!<br/>";
echo "<a href='login.php'>Back</a>";
} 
else {
if($pass <> $hasil['pass']) {
echo "Password Salah!<br/>";
echo "<a href='login.php'>Back</a>";
}
else {$_SESSION['username'] = $hasil['username'];
header('location:index.php');}

}

?>