<?php
include_once("connection.php");


	if(isset($_POST['email'])) {
				
		$email = $_POST['email'];
		
		$result = $con->prepare("SELECT COUNT(*) FROM users WHERE email=:email");
		$result->execute(array(':email' => $email));
		$rows = $result->fetchColumn();
		$rows = (int)$rows;
		
		if ($rows === 1) {
			echo "invalid";
		} else {
			echo "valid";
		}
		
		
	}
	
	
$con = null;

?>