<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Pendaftaran Calon Pemilih</title>
<link rel="stylesheet" href="css/reg.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<?php
error_reporting("E_ALL ^ E_NOTICE");
//Setting php, buat dapetin data yang di input ke form
include("../config.php");
$nama = $_GET["nama"];
$angkatan = $_GET["angkatan"];
$email = $_GET["email"];
$username = $_GET["username"];
$pass = $_GET["pass"];
$hp = $_GET["hp"];
$edu = $_GET["edu"];
$kerja = $_GET["kerja"];

?>
<div id="box">
	<div id="head">
    Formulir Pendaftaran Calon Pemilih
    </div>
    <form action="register.php" method="post">
    <div class="label">Nama</div>
	<div class="inputbox">
    <input type="text" required class="input" name ="nama" size="65">
    </div>
    
    <div class="label">Angkatan/Tahun Lulus</div>
    <div class="inputbox">
    <input type="text" required class="input" name="angkatan" size="65">
    </div>
    <div id="ket"><label>Contoh: 01/1996</label></div>
    
    <div class="label">E-mail</div>
    <div class="inputbox">
    <input type="text" required class="input" name ="email" size="65">
     </div>
     
     <div class="label">Nama Pengguna</div>
    <div class="inputbox">
    <input type="text" name ="username" class="input" required size="65">
     </div>
     
      <div class="label">Kata Sandi</div>
    <div class="inputbox">
   <input type="password" name ="pass" class="input" required size="65">
     </div>
     
      <div class="label">No. Handphone</div>
    <div class="inputbox">
   <input type="text" name ="hp" class="input" required size="65">
     </div>
     
       <div class="label">Pendidikan Terakhir</div>
    <div class="inputbox">
   <select name="edu" > 
					<option value="0" SELECTED>PILIH
					<?php
					$checkedS1 = "";
					$checkedS2 = "";
					$checkedS3 = "";
					if ($edu == "S1")
						$checkedS1 = "SELECTED";
					else
					
					if ($edu == "S2")
					$checkedS2 = "SELECTED";
					else 
						$checkedS3 = "SELECTED";
					print("
						
						<option value=\"S1 / Sarjana \">S1 / Sarjana</option>
						<option value=\"S2 / Magister\">S2 / Magister</option>
						<option value=\"S3/ Doktor \">S3 / Doktor</option>
						
					
					")
					
					?>
					</option>
				</select>
     </div>
     
       <div class="label">Pekerjaan Saat ini</div>
    <div class="inputbox">
   <input type="text" name="kerja" class="input" size="65" required>
     </div>
       <div class="label">Verifikasi Captcha</div>
      <div class="inputbox">
      <div class="g-recaptcha" data-sitekey="6Ld9cAsTAAAAAPnBYtDqSaYJulIxUoadxRa8jS54"></div>
      </div>
    
      
      <div id="but"><input type="submit" value="Daftar!"  ></div>
    </form>
</div>
</body>
</html>
