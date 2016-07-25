<?php
session_start();

include_once("connection.php");
date_default_timezone_set("Asia/Makassar");

if(isset($_POST['nocm'])) {
		$nocm = ($_POST['nocm']);
		
		$stmt = $con->prepare('SELECT COUNT(*) FROM datapasien WHERE nocm=:nocm');
		$stmt->bindParam(':nocm', $nocm, PDO::PARAM_STR);
		$stmt->execute();
		$countRow = $stmt->fetchColumn();
		$countRow = (int)$countRow;

		if($countRow === 1){
			
			$sql = $con->prepare('SELECT * FROM datapasien WHERE nocm=:nocm');
			$sql->bindParam(':nocm', $nocm, PDO::PARAM_STR);
			$sql->execute();
			$rows = $sql->fetch(PDO::FETCH_ASSOC);
			
			echo "<tr><td>No. CM: </td><td id=\"nocm\">".$rows['nocm']."</td></tr>";
			echo "<tr><td>Nama: </td><td id=\"namapasien\">".$rows['namapasien']."</td></tr>";
			echo <<<_END
			
			
			
			<tr><td>Diagnosis</td><td><input type="text" id="diag"/></td><span id="errordiag"></span></tr><br>
			
			<tr><td>ATS:</td><td><input type="radio" name= "ats" id="ats1"/> 1 &nbsp;
			<input type="radio" name= "ats" id="ats2"/> 2 &nbsp;
			<input type="radio" name= "ats" id="ats3"/> 3 &nbsp;
			<input type="radio" name= "ats" id="ats4"/> 4 &nbsp;
			<input type="radio" name= "ats" id="ats5"/> 5 &nbsp;</td><span id="errorats"></span></tr><br>
			
			<tr><td>Golongan IKI:</td><td><input type="radio" name= "gol" id="iki1"/> 1 &nbsp;
			<input type="radio" name= "gol" id="iki2"/> 2 &nbsp;</td><span id="errorgol"></span></tr><br>
			
			<tr><td>Shift Jaga: </td><td><input type="radio" name= "shift" id="pagi"/> Pagi &nbsp;
			<input type="radio" name= "shift" id="sore"/> Sore &nbsp;
			<input type="radio" name= "shift" id="malam"/> Malam &nbsp;</td><span id="errorshift"></span></tr><br>
			

			
			
			<tr><td><input type="submit" id="submitbtn" value="Tambahkan Data"/></td><td><span id="errorsubmt"></span></td></tr>

_END;
			
		}else{
			echo <<<_END
			<tr><td>Nama Pasien</td><td><input type="text" id="namapasien"/></td><span id="errornama"></span></tr><br>
			
			<tr><td>Diagnosis</td><td><input type="text" id="diag"/></td><span id="errordiag"></span></tr><br>
			
			<tr><td>ATS:</td><td><input type="radio" name= "ats" id="ats1"/> 1 &nbsp;
			<input type="radio" name= "ats" id="ats2"/> 2 &nbsp;
			<input type="radio" name= "ats" id="ats3"/> 3 &nbsp;
			<input type="radio" name= "ats" id="ats4"/> 4 &nbsp;
			<input type="radio" name= "ats" id="ats5"/> 5 &nbsp;</td><span id="errorats"></span></tr><br>
			
			<tr><td>Golongan IKI:</td><td><input type="radio" name= "gol" id="iki1"/> 1 &nbsp;
			<input type="radio" name= "gol" id="iki2"/> 2 &nbsp;</td><span id="errorgol"></span></tr><br>
			
			<tr><td>Shift Jaga: </td><td><input type="radio" name= "shift" id="pagi"/> Pagi &nbsp;
			<input type="radio" name= "shift" id="sore"/> Sore &nbsp;
			<input type="radio" name= "shift" id="malam"/> Malam &nbsp;</td><span id="errorshift"></span></tr><br>
			

			
			
			<tr><td><input type="submit" id="submitbtn" value="Tambahkan Data"/></td><td><span id="errorsubmt"></span></td></tr>

_END;
		}
	}

	
$con = null;

?>