<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="static/login.js"></script>
  <link rel="stylesheet" href="static/style.css"/>
</head>
<body>

<?php
ini_set('session.gc_maxlifetime', 60*60*12);
session_start();
require_once("script/connection.php");
//try {

//$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_SESSION['userName'])){
	
	echo "<div class=\"container\" id=\"welcome\">";
	echo "Selamat datang, ".$_SESSION['userName'].". Silahkan lanjutkan ke <a href=\"main.php\">halaman utama</a>.";
	echo "</div></body></html>";
	
	} else {
	echo <<<_END

	<div class="container" id="welcome">
	<input type="text" id="username" placeholder="Username"/><br>
	<input type="password" id="pass" placeholder="Password"/><br>
	<input type="submit" id="sbtbutton" value="Login"/>&nbsp <span id="errorpass">atau &nbsp<a href="signuppage.html">Daftar</a>&nbsp</span>
	</div>

_END;

};

/*} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
}*/
?>

</body>
</html>