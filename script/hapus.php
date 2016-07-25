<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hapus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="kumpulan/style.css"/>
  
</head>
<body>

<div class="container" id="mainform">
<h4>Yakin ingin menghapus:</h4>
<form action="" method="post">
<table class="table" id="form">
<?php
session_start();

include_once("connection.php");
try {
	
	date_default_timezone_set("Asia/Makassar");
	
if (isset($_GET['id'])){
	
	$noid = ($_GET['id']);
	$uname = $_SESSION['userName'];

	$result = $con->prepare("SELECT datapasien.nocm, datapasien.namapasien, iki.tanggal, iki.id, iki.diag FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username=:uname AND id=:noid");
	$result->execute(array(':uname' => $uname, ':noid' => $noid));

	$list = $result->fetch(PDO::FETCH_ASSOC);

	
	
	echo<<<_END
			<tr><td>Tanggal Masuk</td><td>{$list['tanggal']}</td>
			<tr><td>Nama Pasien</td><td>{$list['namapasien']}</td>
			<tr><td>Diagnosis</td><td>{$list['diag']}</td>
			<input type="hidden" name="noid" value="{$list['id']}"/>
						
			<tr><td><input type="submit" name="submit" value="Hapus Entri"/></td><td><span id="errorsubmt"></span></td></tr>

_END;

	}
$con = null;

	} catch(Exception $e){
	print $e->getMessage();
}
?>

</table>
</form>

<?php
require("connection.php");
date_default_timezone_set("Asia/Makassar");
	
if(isset($_POST['submit']) && ($_POST['submit'] === 'Hapus Entri')){
	$id = $_POST['noid'];

	$sql = $con->prepare("DELETE FROM iki WHERE id=:id");
	$sql->execute(array(':id' => $id));
	$row = $sql->rowCount();
	$row = (int)$row;
	if($row === 1){
		echo 'Data berhasil dihapus.';
		echo '<br><a href="/main.php">Kembali ke halaman utama</a>';
	}
}

$con = null;


?>
</div>
</body>
</html>