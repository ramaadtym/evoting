<?php
include("../config.php");
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
    	<ul>
        <!--<li><a href='javascript: window.history.back();'>Kembali</a></li>-->
        </ul>
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
          	
          	<div id='txth' align='center'>
          	Perolehan Suara
          	</div>
          	<div id='panitia' align='center'>
          	Pemilihan Umum Ikatan keluarga Alumni Fakultas Hukum <br> Universitas Padjadjaran
          	</div>
      </div>
    </div>
    <table>
	
<tr>
<td> <div id='kandidat'><img src='images/kandidat1.jpg' width='205' height='299' /></div></td>
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
";

print("<td align='center'>");
$kandidat1 = mysql_fetch_array(mysql_query("select total from suara where opsi='Yannie'"));

print("<h3>".$kandidat1['total']."");
print(" Suara</h3></td>");

print("
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

");
print("<td align='center'>");
$kandidat2 = mysql_fetch_array(mysql_query("select total from suara where opsi='Agus'"));

print("<h3>".$kandidat2['total'].""); 
print(" Suara</h3></td>");

print("</tr>");
print("</table>");
$suara = mysql_query("select SUM(total) AS suaramasuk from suara ");
$tampil = mysql_fetch_assoc($suara);
echo"<div id='masuk'>Jumlah Suara Masuk: ".$tampil['suaramasuk']." Suara</div>

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