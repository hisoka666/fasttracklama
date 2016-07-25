<?php
include_once("connection.php");


	if(isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pwd'])) {
			
			$fname = $_POST['fname'];
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			$date = date("F, d Y");
			
			$query = $con->prepare("INSERT INTO users(tanggal, nama, username, email, password) VALUES (:date,:fname,:uname,:email,:pwd)");
			$query->execute(array(':date' => $date,':fname' => $fname, ':uname' => $uname, ':email' => $email, ':pwd' => $pwd));
			
			if($query->rowCount() === 1) {
				echo "Selesai.&nbsp";
				echo "Silahkan menuju halaman <a href=\"/\">Login</a>";
			} else {
				echo "Error";
			
			};
	
	
	};



$con = null;

?>