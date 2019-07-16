<?php
include("../config.php");
$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 20; URL=$url1");

echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Perolehan Suara Sementara | E-Voting IKA FH UNPAD</title>
<link rel='stylesheet' href='css/hasil.css' />
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
        	<img src='images/ika.png' width='120' height='101' />
          	</div>
<div id='logo2'>
        	<img src='images/logo.png' width='120' height='101' />
          	</div>
          	<div id='txth'>
          	Perolehan Suara Sementara
          	</div>
          	<div id='panitia'>
          	Pemilihan Umum Ikatan keluarga Alumni Fakultas Hukum Universitas Padjadjaran
          	</div>
      </div>
    </div>
<marquee scrollamount='10'>SELAMAT DATANG DI MUBES & REUNI AKBAR IKA FH UNPAD 2015</marquee>
    <table>
	




<tr>
";

print("<td align='center'>");
$kandidat1 = mysql_fetch_array(mysql_query("select total from suara where opsi='Yannie'"));



print("<td align='center'>");
$kandidat2 = mysql_fetch_array(mysql_query("select total from suara where opsi='Agus'"));



print("</tr>");
print("</table>");



//$result=mysql_query("SELECT * FROM register");
//echo"<div id='calon'>Jumlah Calon Pemilih Terdaftar: ".mysql_num_rows($result)."</div>";


$suara = mysql_query("select SUM(total) AS suaramasuk from suara ");
$tampil = mysql_fetch_assoc($suara);
echo"<div id='masuk2'>JUMLAH SUARA MASUK: ".$tampil['suaramasuk']." SUARA</div>
<div id='calon'>Update Database diri Anda di: <span style='color:#000;'><u> bit.ly/db-fhunpad</u></span></div>




<!---Footer-->
<div id='copy2'>
 	<p> Copyright &copy; 2015 <br />
 	Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran
 	<br />
     Designed by <span id='jstk'><a href='#' >JASTIK</a></span></p>

</div>
</body>
</html>
";
                  

?>