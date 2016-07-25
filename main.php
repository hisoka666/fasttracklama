<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Utama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="static/main.js"></script>
 
  <link rel="stylesheet" href="kumpulan/style.css"/>
</head>
<body>
<span id="errormsg"></span>
<?php
session_start();
date_default_timezone_set("Asia/Makassar");


	$tanggal = date("Y-m");
	$tglubah = new DateTime($tanggal);
	date_sub($tglubah, date_interval_create_from_date_string("1 months"));
	$tgllalu = date_format($tglubah, 'F, Y');
	$bulanini = date('F, Y');
	
if(isset($_SESSION['userName'])){
	echo <<<_END
	<div class="container" id="mainform">
	Selamat datang, dr. {$_SESSION['name']}. <a href="script/logout.php">Log Out</a><br><br> 
	<input type="text" id="nocm" placeholder="Nomor CM"/>&nbsp<span id="errornocm"></span>
	
	<table class="table" id="form"></table><br>
	
	
	<input type="button" id="togglebtn" value="Ubah tabel"/><br><br>
	<div class="togtab">
	<div class="table-responsive">
	<table class="table tabel-bordered" id="tablehari" border="1px" >
		<tr>
			<th class="left">No</th>
			<th>Jam</th>
			<th>No. CM</th>
			<th>Nama</th>
			<th>Diagnosis</th>
			<th>ATS</th>
			<th>IKI</th>
		</tr>
		
		
		
		
		
	</table>
	</div>
	</div>
	
	<div class="togtab" style="display: none">
	<div class="table-responsive">

	<table class="table tabel-bordered togtab2" id="tabeliki" >
		<tr>
			<th>Tanggal</th>
			<th>IKI 1</th>
			<th>IKI 2</th>
		<tr>
	
	
	</table>
	</div>
	
	<div class="table-responsive" id="bulaninidiv">
	<h3 class="togtab2" >BCP $bulanini</h3>
	<table class="table tabel-bordered togtab2" id="tablebln" border="1px"  >
		<tr>
			<th class="left">No</th>
			<th>Tanggal</th>
			<th>No. CM</th>
			<th>Nama</th>
			<th>Diagnosis</th>
			<th>IKI 1</th>
			<th>IKI 2</th>
			<th>Ubah</th>
		</tr>
		
		
		
	</table>
	</div>
	
	<table class="table tabel-bordered togtab2" style="display: none" id="tabelikibulanlalu" >
		<tr>
			<th>Tanggal</th>
			<th>IKI 1</th>
			<th>IKI 2</th>
		<tr>
	
	
	</table>
	
	<div class="table-responsive" id="bulanlaludiv">
	<h3 class="togtab2" style="display: none">BCP $tgllalu </h3>
	<table class="table tabel-bordered togtab2" id="tableblnlalu" style="display: none" border="1px" >
		<tr>
			<th class="left">No</th>
			<th>Tanggal</th>
			<th>No. CM</th>
			<th>Nama</th>
			<th>Diagnosis</th>
			<th>IKI 1</th>
			<th>IKI 2</th>
		</tr>
		
		
		
	</table><br>
	</div>
	<input type="button" id="bulanlalu" value="Ubah BCP" />
	</div>
	</div>

	

	
	</div>
	
_END;
} else {
	
	echo "<div class=\"container\" class=\"welcome\">";
	echo "Silahkan <a href=\"/\">Login</a>";
	echo "</div>";
	

};


?>
</body>
</html>