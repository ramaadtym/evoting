<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:../home.php'); }
else { $user = $_SESSION['username'];}
require("../config.php");//Koneksi Database
$year = date('Y');//Ambil Tahun

//Ambil Data dari Tabel
$status = mysqli_query($konek,"SELECT * FROM register WHERE username = '$user'"); 
$hasil = mysqli_fetch_array($status);

//Kondisi Jika Tabel Suara (disini saya menggunakan array $hasil dengan urutan 9[untuk kolom suara]), bernilai 0
//Maka Anda akan dibawa menuju kertas suara
if($hasil[3] == 0)

echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-Voting IKA FH UNPAD | Surat Suara</title>
<link rel='stylesheet' href='css/suara.css' />
</head>

<body>
<div id='bg'>
<div id='bx'>
<div id='box'>
	<img src='images/ika.png' id='logo' />
<img src='images/logo.png' id='logo2' />
	<div id='txth'>SURAT SUARA PEMILIHAN UMUM</div>
    <div id='ika'>IKATAN KELUARGA ALUMNI FAKULTAS HUKUM UNIVERSITAS 
    PADJAJARAN

    </div>
    </div>
</div>
<table align='center'>
<tr>
<td><img src='images/kandidat1.jpg' width='205' height='299' /></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><img src='images/kandidat2.jpg' width='205' height='299' /></td>
</tr>

<tr>
<form action='vote.php?un=$user' method='post'>
<td align='center'><input type='radio' name='calon' value='Yannie'></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td align='center'><input type='radio' name='calon' value='Agus'></td>

</tr>
</table>
<div align='center'><input type='submit' value='PILIH'></div>
</div>
</form>
</body>
</html>";
//Kondisi Jika Tabel Suara (disini saya menggunakan array $hasil dengan urutan 9[untuk kolom suara]), bernilai 1,
//Maka akan muncul laman yang bertuliskan Sudah Memilih
else
	echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-Voting IKA FH UNPAD</title>
<link rel='stylesheet'  href='css/oops.css' />
</head>

<body>
<div id='navbar'>
	<div id='out'>
    <ul>
    <!--<li><a href='../login/status.php'>Beranda</a></li>
    <li><a href='hasil.php'>Perolehan Sementara</a></li>-->
    <li><a href='../login/logout.php'>Keluar</a></li>
    </ul>
    </div>
    <div id='logo'>
   User Area | $hasil[1]
    </div>
</div>

<div id='cont'>

  <div id='yeah'>
	<p>
    Oops! Anda Sudah Menggunakan Hak Suara Anda
    <p id='psn'>Terima kasih sudah menggunakan Hak Suara Anda</p>
    </div>
</div>
<!--Footer-->
  <div id='copy'>
  <p> Copyright &copy; $year <br />
 	Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran
 	<br />
     Designed by <span id='jstk'><a href='#' >JASTIK</a></span></p>
</div>
</body>
</html>";
?>
</body>
</html>

