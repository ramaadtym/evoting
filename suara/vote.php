<?php
include("../config.php");

$user = $_GET['un'];

$pol = $_POST['calon'];
$query = "select total from suara where opsi='$pol'";
$result = mysqli_query($konek,$query);
$tcount = mysqli_fetch_array($result);
$tcount = $tcount['total']+1;

$query1 = "update suara SET total ='$tcount' where opsi='$pol'";
    $result1 = mysqli_query($konek,$query1);
 echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>E-Voting IKA FH UNPAD | Terima kasih!</title>
<link rel='stylesheet' href='css/vote.css' />
<script>
  setTimeout(function() { location.href='http://vote.ramaadtym.info/login/logout.php'  },5000);
</script> 

</head>

<body>
<div id='bg'>
<p id='thank'>Terima kasih telah menggunakan <br /> Hak Suara Anda!</p>


<div id='ika'><img src='../images/ika.png' width='217' height='57'/></div>
</div>

</body>
</html>

 ";
   
	
	$query2 = "UPDATE register SET suara='1' WHERE username = '$user'"; //Update Database ketika tombol di klik
	$hasil = mysqli_query ($konek,$query2);
     
    ?>
