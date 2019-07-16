<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $user = $_SESSION['username']; }
require("../config.php");

$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 60; URL=$url1");

$no = 1;
$data = mysql_query("SELECT * FROM register ORDER BY username");

echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel='stylesheet' href='css/index.css' />
<title>E-Voting | Administrator</title>
</head>

<body>
<div id='header'>
	<div id='adm'>
	<img src='images/adm_area.png' width='181' height='32' />
	</div>
    <div id='navbar'>
    	<ul>
        <li><a href='../suara/hasil.php'>Perolehan Sementara</a></li>
        <li><a href='logout.php'>Keluar</a></li>
        </ul>
    </div>
</div>

<div id='cont'>
	<div id='title'>
    <p>Verifikasi Calon Pemilih</p>
    </div>
    <div>
	";
    print("<table>");
    print("<thead>");
    	print("<tr>");
    		print("<th>");
            print("No.");
    		print("</th>");
            print("<th>");
            print("Username");
    		print("</th>");
            print("<th>");
            print("Status Suara");
    		print("</th>");
            print("<th>");
            print("Status Akun");
    		print("</th>");
            print("<th>");
           	print("</th>");
    	print("</tr>");
		while ($hasil = mysql_fetch_array($data)){
        print("<tr>");
        	print("<td>");
            echo $no++;
    		print("</td>");
            print("<td>");
            print("$hasil[1]");
    		print("</td>");
            print("<td>");
            if($hasil[3] == 0)
		echo"<div id='blm'><b>Belum Memilih</b></div>";
	else
		echo"<div id='udh'>Sudah Memilih</div>";
    		print("</td>");
            print("<td>");

echo"<div id='ver'>Terverifikasi!</div>";

           // if($hasil[10] == 0)
//		echo"<div id='nover'>Belum Di Verifikasi</div>";
//	else
//		echo"<div id='ver'>Terverifikasi!</div>";
  //         	print("</td>");
    //        print("<td>");
      //     print("<div id='linkver'><a href=\"prosverifying.php?m=$hasil[3]&usern=$hasil[4]\">Verifikasi</a></div>");
        //    print("</td>");
		}
        print("</tr>");
    print("</table>");
 echo"   </div>
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
