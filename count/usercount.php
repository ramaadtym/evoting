<?php
include("../config.php");
$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 30; URL=$url1");

echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Daftar Calon Pemilih | E-Voting IKA FH UNPAD</title>
<link rel='stylesheet' href='css/usercount.css' />
</head>

<body>
<div id='header'>
<div id='navbar'>

</div>
</div>
<div id='cont'>
	<div id='head'>
	  <div id='box'>
        	<div id='logo'>
        	<img src='images/logo.png' width='120' height='101' />
          	</div>
          	<div id='txth'>
          	Daftar Calon Pemilih Terdaftar
          	</div>
          	<div id='panitia'>
          	Pemilihan Umum Ikatan keluarga Alumni Fakultas Hukum Universitas Padjadjaran
          	</div>
      </div>
    </div>
<marquee>Selamat Datang di Musyawarah Besar Reuni Akbar Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjadjaran</marquee>

    <table>
	
<tr>
</tr>

<tr>
";

print("<td align='center'>");





print("</tr>");
print("</table>");
$result=mysql_query("SELECT * FROM register");
echo"<div id='masuk'>Jumlah Calon Pemilih Terdaftar: ".mysql_num_rows($result)."  dari 3.000
<br>

</div>

<!---Footer-->
<div id='copy'>
 	<p> Copyright &copy; 2015 <br />
 	Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran
 	<br />
     Designed by <span id='jstk'><a href='#' >JASTIK</a></span></p>

</div>
</body>
</html>
";
?>