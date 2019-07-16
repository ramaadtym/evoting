<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:../home.php'); }
else { $user = $_SESSION['username']; }
include"../config.php";

$year = date('Y');
$status = mysqli_query($konek,"SELECT * FROM register WHERE username = '$user'");
$hasil = mysqli_fetch_array($status);

//if($hasil[10] == 0)
	//Belum di Verifikasi
//	echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
//<html xmlns='http://www.w3.org/1999/xhtml'>
//<head>
//<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
//<title>E-Voting IKA FH UNPAD</title>
//<link rel='stylesheet' href='css/blm.css' />
//</head>

//<body>
//<div id='navbar'>
//	<div id='out'>
//    <a href='logout.php'>Keluar</a>
//    </div>
//    <div id='logo'>
//    User Area | Selamat Datang, $hasil[1]
//    </div>
//</div>

//<div id='cont'>
//	<div id='att'>
//    <img src='images/att.png' width='320' height='320' />
//    </div>
//  <div id='sorry'>
//	<p>Mohon Maaf,<br />
//    Akun Anda belum di verifikasi!
//    </p>
//    <p id='psn'>Silakan Hubungi Panitia untuk konfirmasi akun Anda</p>
//    </div>
//</div>
//<!--Footer-->
 // <div id='copy'>
 // <p> Copyright &copy; 2015 <br />
 //	Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran
 //	<br />
   //  Designed by <span id='jstk'><a href='#' >JASTIK</a></span></p>
//</div>
//</body>
//</html>";
//else Kalo Udah Di Verifikasi
	echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-Voting IKA FH UNPAD</title>
<link rel='stylesheet' href='css/udh.css' />
</head>

<body>
<div id='navbar'>
	<div id='out'>
    <ul>
     <!--<li><a href='../suara/suara.php'>Surat Suara</a></li>
   <li><a href='../suara/hasil.php'>Perolehan Sementara</a></li>
    <li><a href='logout.php'>Keluar</a></li>-->
    </ul>
    </div>
    <div id='logo'>
    User Area | Selamat Datang, $hasil[1]
    </div>
</div>

<div id='cont'>
<img src='images/berhasil.jpg'>
  <div id='yeah'>
<a href='../suara/suara.php' id='btn1'>SURAT SUARA</a>
<a href='logout.php' id='button2'>KELUAR</a>
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
</html>
";
?>