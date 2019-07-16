<?php 
session_start();
session_destroy();
?>
<html>
	
<head>
<title>Administrator E-Voting IKA FH UNPAD</title>

<link href="css/style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body onload="pass()">

<div class="login-02">
<div id="welcome">
<h2>Administrator E-Voting IKA FH UNPAD!</h2>
</div>
<p id="subwel"> silakan login untuk mengakses halaman Admin!</p>

		<div class="second-login">
			<form class="two" action="proslog.php" method="post">
				<li>
					<input type="text" name="user" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icons user1"></a>
				</li>
				<li class="pw">
					<input type="password" name="pass" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}"><a href="#" class=" icons lock1"></a>
				</li>
				<div class="submit-two">
					<input type="submit" onclick="myFunction()" value="LOG IN" > 
				</div>
			</form>
		</div>
		<div id="copy">Copyright &copy; 2015 Ikatan Keluarga Alumni Fakultas Hukum Universitas Padjajaran. <br></div>
		<div id="desain">Designed by <a href="http://facebook.com/jastikcom" target="_blank">Jastik</a></div>
		<div id="navbot"><a href="http://ika-fhunpad.org" target="_blank">Web IKA FH UNPAD</a></div>
		</body>
</html>