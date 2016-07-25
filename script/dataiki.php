<?php
session_start();

include_once("connection.php");
date_default_timezone_set("Asia/Makassar");

if(isset($_POST['nocm']) && isset($_POST['namapasien']) && isset($_POST['diag']) && isset($_POST['ats']) && isset($_POST['gol']) && isset($_POST['shift'])) {
		
		$nocm = $_POST['nocm'];
		$namapasien = $_POST['namapasien'];
		$diag = $_POST['diag'];
		$ats = $_POST['ats'];
		$gol = $_POST['gol'];
		$shift = $_POST['shift'];
		$uname = $_SESSION['userName'];
		echo $nocm;
		$date = date("Y-m-d H:i:s");
		
		$stmt = $con->prepare('SELECT COUNT(*) FROM datapasien WHERE nocm=:nocm');
		$stmt->bindParam(':nocm', $nocm, PDO::PARAM_STR);
		$stmt->execute();
		$cRows = $stmt->fetchColumn();
		$cRows = (int)$cRows;
		
		$query1 = $con->prepare('INSERT INTO datapasien(nocm, namapasien) VALUES (:nocm,:namapasien)');

		
		$query2 = $con->prepare('INSERT INTO iki(nocm, diag, ats, gol, tanggal, shift, username) VALUES (:nocm,:diag,:ats,:gol,:date,:shift,:uname)');

		
		if ($cRows === 1) {
			$query2->execute(array(':nocm' => $nocm, ':diag' => $diag, ':ats' => $ats, ':gol' => $gol, ':date' => $date, ':shift' => $shift, ':uname' => $uname));			
			if($query2->rowCount() === 1){
				echo "Selesai <br>";
			} else {
				echo "Error";
			}
		} else {
			$query1->execute(array(':nocm' => $nocm, ':namapasien' => $namapasien));
			$query2->execute(array(':nocm' => $nocm, ':diag' => $diag, ':ats' => $ats, ':gol' => $gol, ':date' => $date, ':shift' => $shift, ':uname' => $uname));	
			if(($query1->rowCount() === 1) && ($query2->rowCount() === 1)) {
				echo "Selesai";
				
			} else {
				echo "Error";
		}
		}
	
	};


	$con = null;
?>