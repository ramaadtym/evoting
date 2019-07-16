<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $user = $_SESSION['username']; }
require("../config.php");
$no = 1;
$data = mysql_query("SELECT * FROM register ORDER BY nama");
$_GET=['msg'];
echo"<hr><div align='center'><h2>Verifikasi Daftar Pemilih</h2></div>";
echo "<h3 align='center' style='font-size:18px;'> Panitia Pemungutan Suara Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran</h3><hr>";
echo"<div align='center' style='margin-bottom:10px;'><a href='logout.php'>Keluar</a></div>";
print("
<table width=\"auto\" align=\"center\">\n");
print("<tr>");
print("<td style=\"padding:10px;\">");
print("No.");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Nama");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Angkatan /Tahun");
print("</td>");
print("<td style=\"padding:10px;\">");
print("E-mail");
print("</td>");
print("<td style=\"padding:10px;\">");
print("No. Handphone");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Pend. Terakhir");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Pekerjaan Saat Ini");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Status Suara");
print("</td>");
print("<td style=\"padding:10px;\">");
print("Status Akun");
print("</td>");
print("<td style=\"padding:10px;\">");

print("</td>");
print("</tr>");

while ($hasil = mysql_fetch_array($data)){

//Isi 	 
print("<tr>");
print("<td style=\"padding:10px;\">");
echo $no++;
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[1]");
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[2]");
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[3]");
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[6]");
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[7]");
print("</td>");
print("<td style=\"padding:10px;\">");
print("$hasil[8]");
print("</td>");
print("<td style=\"padding:10px;\">");
if($hasil[9] == 0)
		echo"Belum Memilih";
	else
		echo"Sudah Memilih";
print("</td>");
print("<td style=\"padding:10px;\">");
	if($hasil[10] == 0)
		echo"Belum Di Verifikasi";
	else
		echo"Terverifikasi!";
print("</td>");
print("<td style=\"padding:10px;\">");
print("<a href=\"prosverifying.php?m=$hasil[3]&usern=$hasil[4]\">");
print("Verifikasi</a>");
print("</td>");
}
print("</tr>");

  
print("</table>");
?>
<html>
<head>
<title>Verifikasi Daftar Pemilih</title>
</head>
</html>