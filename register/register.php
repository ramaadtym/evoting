<?php
include("../config.php");
$nama = $_POST["nama"];
$angkatan = $_POST["angkatan"];
$email = $_POST["email"];
$username = $_POST["username"];
$pass = $_POST["pass"];
$hp = $_POST["hp"];
$edu = $_POST["edu"];
$kerja = $_POST["kerja"];

$enkrip = md5($pass);

$query = "INSERT INTO register" .
"(nama, angkatan, email, username, pass, hp, pend, kerja)" .
" VALUES ('$nama', '$angkatan', '$email', '$username', '$enkrip', '$hp', '$edu', '$kerja')";
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
		if(!$captcha){
          echo 'Cek Kembali Captcha yang Anda masukkan! <br> <a href="reg.php">Kembali</a>';
          exit;
        }
		
$seretkey="6Ld9cAsTAAAAAL-Zsh0sew06jp0dHzsTkZX1FKlh";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$seretkey."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
          echo 'Maaf, Proses pendaftaran gagal!';
				}
		else
			mysql_query($query) or die('Error, insert query failed');
		if(mysql_affected_rows () > 0 )
        {
		header('Location: prosreg.html');
exit;
        }
?>
