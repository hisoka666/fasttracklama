<?php

ini_set('session.gc_maxlifetime', 60*60*12);
session_start();

require("connection.php");

	if(isset($_POST['username']) && isset($_POST['pass'])){
		$uname = $_POST['username'];
		$pwd = $_POST['pass'];

		$stmt = $con->prepare('SELECT COUNT(*) FROM users WHERE username = :uname');
		$stmt->bindParam(':uname', $uname, PDO::PARAM_STR);
		$stmt->execute();
		$row = $stmt->fetchColumn();
		$row = (int)$row;

		
		if($row == 1){
			$stmt = $con->prepare('SELECT * FROM users WHERE username = :uname');
			$stmt->bindParam(':uname', $uname, PDO::PARAM_STR);
			$stmt->execute();
			$rows = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if($rows['password'] == $pwd ){
				echo "valid";
				$_SESSION['userName'] = $uname;
				$_SESSION['name'] = $rows['nama'];
				session_regenerate_id(true);
			}else{
				echo "invalid";
			}
		}

	};
	$con = null;	
?>