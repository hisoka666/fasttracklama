<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="kumpulan/style.css"/>
  <script src="kumpulan/edithapus.js"></script>
  <script>
	$(document).ready(function(){
		var ats = $("#pilihats").val();
		var gol = $("#pilihgol").val();
		ats = "#ats"+ats;
		gol = "#iki"+gol;
		
		$(ats).prop("checked", true);
		$(gol).prop("checked", true);
		
	});
  
  </script>
</head>
<body>

<div class="container" id="mainform">
<form action="" method="post">
<table class="table" id="form">
<?php
session_start();

include_once("connection.php");
	
date_default_timezone_set("Asia/Makassar");
	
if (isset($_GET['id'])){
	
	$noid = $_GET['id'];
	
	$uname = $_SESSION['userName'];
	
	$result1 = $con->prepare("SELECT * FROM iki WHERE id=:noid");
	$result1->execute(array(':noid' => $uname));
	
	$rows1 = $result1->fetch(PDO::FETCH_ASSOC);	
	$nocm = $rows1['nocm'];
	
	$result2 = $con->query("SELECT datapasien.nocm, datapasien.namapasien, iki.id, iki.diag, iki.ats, iki.gol FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username='$uname' AND id='$noid'");

	$rows2 = $result2->fetch(PDO::FETCH_ASSOC);
	
	
	echo<<<_END
			
			<tr><td>Nama Pasien</td><td><input type="text" name="namapasien" id="namapasien" value="{$rows2['namapasien']}"/></td><span id="errornama"></span></tr><br>
			
			<tr><td>Diagnosis</td><td><input type="text" name="diag" id="diag" value="{$rows2['diag']}"/></td><span id="errordiag"></span></tr><br>
			
			<tr><td>ATS:</td><td><input type="radio" name= "ats" id="ats1" value="1"/> 1 &nbsp;
			<input type="radio" name= "ats" id="ats2" value="2"/> 2 &nbsp;
			<input type="radio" name= "ats" id="ats3" value="3"/> 3 &nbsp;
			<input type="radio" name= "ats" id="ats4" value="4"/> 4 &nbsp;
			<input type="radio" name= "ats" id="ats5" value="5"/> 5 &nbsp;
			<input type="hidden" id = "pilihats" value="{$rows2['ats']}"/></td><span id="errorats"></span></tr><br>
			
			<tr><td>Golongan IKI:</td><td><input type="radio" name= "gol" id="iki1" value="1"/> 1 &nbsp;
			<input type="radio" name="gol" id="iki2" value="2"/> 2 &nbsp;
			<input type="hidden" id="pilihgol" value="{$rows2['gol']}"/></td><span id="errorgol"></span></tr><br>
			
			<input type="hidden" name="noid" value="{$rows2['id']}"/>
			<input type="hidden" name="nocm" value="{$rows2['nocm']}"/>
			
			
			<tr><td><input type="submit" name="submit" value="Ubah Data"/></td><td><span id="errorsubmt"></span></td></tr>

_END;

	}

	$con = null;

?>

</table>
</form>

<?php
include("connection.php");

	date_default_timezone_set("Asia/Makassar");

if (isset($_POST['submit'])){
	if(isset($_POST['submit']) && ($_POST['submit']=='Ubah Data')){
	$namapasien = $_POST['namapasien'];
	$diag = $_POST['diag'];
	$ats = $_POST['ats'];
	$gol = $_POST['gol'];
	$id = $_POST['noid'];
	$nocm = $_POST['nocm'];
	
	$sql1 = $con->prepare("UPDATE iki SET diag=:diag,ats=:ats,gol=:gol WHERE id=:noid");
	$sql1->execute(array(':diag' => $diag, ':ats' => $ats, ':gol' => $gol, ':noid' => $noid));
	$sql2 = $con->prepare("UPDATE datapasien SET namapasien=:namapasien WHERE nocm=:nocm");
	$sql2->execute(array(':namapasien' => $namapasien, ':nocm' => $nocm));
	
	$row1 = $sql1->rowCount();
	$row2 = $sql2->rowCount();
	$row1 = (int)$row1;
	$row2 = (int)$row2;

	if(($row1 === 1) || ($row2 === 1)){
		echo 'Data berhasil diubah';
		echo '<br><a href="/main.php">Kembali ke halaman utama</a>';
	}
}
}

$con = null;
?>
</div>
</body>
</html>