<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $user = $_SESSION['username']; }
require("../config.php");

//Ubah Record ketika tombol verifikasi di klik
$pengguna = $_GET['usern']; //ambil data dari URL prosverify.php?usern=username
$mail = $_GET['m'];
$web = "http://e-voting.ika-fhunpad.org/login";

$query = "UPDATE register SET status='1' WHERE username = '$pengguna'"; //Update Database ketika tombol di klik

$hasil = mysql_query ($query);
if($hasil == True)
	print("Akun dengan user $pengguna berhasil di Verifikasi! Pesan Verifikasi sudah dikirim ke $mail!");
else
print("Gagal");

//kirim email
$kepada = $mail;
$body_mail = "<div style='font-size:25px;' align ='center'>SELAMAT!</div> 
			<p style='background-color:#fff58b; padding:15px'> 
			Akun Anda telah kami verifikasi, silakan klik link berikut untuk <a href='voting.ika-fhunpad.org'>Masuk</a> menggunakan Username Anda: <b> $pengguna </b> dan Password yang telah Anda daftarkan!
			</p>
<p>Hormat Kami,</p>
<p><br><br><br> <b>Panitia Pemungutan Suara<br>
Ikatan keluarga Alumni Fakultas Hukum Universitas Padjajaran</b>
</p>

			
			\r\n";
$headers = "From: panitia@ika-fhunpad.org\r\n";
$headers .= "Reply-to: panitia@ika-fhunpad.org\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$mail_sent = @mail($kepada, "Akun Anda Berhasil di Verifikasi!", $body_mail, $headers);

?>
<html>
<head>
<title>Verifikasi User <?php echo $pengguna;?></title>
</head>
<body>
Kembali ke <a href="index.php">Laman Verifikasi</a>
</body>
</html>
