<?php
include_once("connection.php");

	if(isset($_POST['uname'])) {
		$uname = ($_POST['uname']);

		$result = $con->prepare("SELECT COUNT(*) FROM users WHERE username=:uname");
		$result->execute(array(':uname' => $uname));
		$row = $result->fetchColumn();
		$row = (int)$row;

		if ($row === 1) {
			echo "invalid";
		} else {
			echo "valid";
		}
	}
	
$con = null;
?>