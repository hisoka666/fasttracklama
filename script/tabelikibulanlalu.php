<?php
session_start();
include_once("connection.php");
date_default_timezone_set("Asia/Makassar");


	$uname = $_SESSION['userName'];
	
	$hariini = date('Y-m-d');
	$kemarin = new DateTime($hariini);
	date_sub($kemarin,date_interval_create_from_date_string("1 months"));
	$kemarinbulan = $kemarin->format('m');
	$kemarintahun = $kemarin->format('Y');

	
	$jmlhari = cal_days_in_month(CAL_GREGORIAN,$kemarinbulan,$kemarintahun);

		for($i=0;$i<=$jmlhari;$i++){
			$a = $i+1;
			$tanggal = new DateTime($kemarintahun.'-'.$kemarinbulan.'-'.$i);
			$tglsql = $tanggal->format('Y-m-d');
			$tglsql2 = "";

				$sql = $con->query("SELECT gol, shift, tanggal FROM iki WHERE username='$uname' AND tanggal LIKE '$tglsql %'");

				$iki1 = 0;
				$iki2 = 0;
				$iki3 = 0;
				$iki4 = 0;
				
				
				while($list = $sql->fetch(PDO::FETCH_ASSOC)) {
					
					$tglbaru = $list['tanggal'];
					$tglubah = new DateTime($tglbaru);
					date_sub($tglubah,date_interval_create_from_date_string("1 days"));
					$tglsql2 = $tglubah->format('Y-m-d');
					$jam = $tglubah->format('His');
					$jamint = (int)$jam;
					if($list['shift'] == 3 && $jamint <= 90000 && $list['gol'] == 1){
						$iki3 += 1;
					} else if ($list['shift'] == 3 && $jamint <= 90000 && $list['gol'] == 2){
						$iki4 += 1;
					} else if ($list['shift'] == 3 && $jamint > 200000 && $list['gol'] == 1){					
						$iki1 += 1;
					} else if ($list['shift'] == 3 && $jamint > 200000 && $list['gol'] == 2){					
						$iki2 += 1;
					} else if($list['gol'] == 1){
						$iki1 += 1;
					} else {
						$iki2 += 1;
						
					}
				
				};
				
				$listiki[] = array("tanggal" => $tglsql, "iki1" => $iki1, "iki2" => $iki2);
				$listiki[] = array("tanggal" => $tglsql2, "iki1" => $iki3, "iki2" => $iki4);
				
				
	}
	

	$arrlength = count($listiki);
	
	for ($i=0;$i<$arrlength;$i++){
		if($listiki[$i]['iki1'] == 0 && $listiki[$i]['iki2'] == 0){
			unset($listiki[$i]);
			
		}
	};


	$listiki = array_values($listiki);
	$arrlength = count($listiki);
	
	for($j=0;$j<=$arrlength;$j++){
				$listiki = array_values($listiki);
				$arrlength = count($listiki);
		for ($k=$j+1;$k<$arrlength;$k++){
			$temptgl1=$listiki[$j]['tanggal'];
			$tempiki11=$listiki[$j]['iki1'];
			$tempiki21=$listiki[$j]['iki2'];
			
			$temptgl2=$listiki[$k]['tanggal'];
			$tempiki12=$listiki[$k]['iki1'];
			$tempiki22=$listiki[$k]['iki2'];
			if ($temptgl1 == $temptgl2){
				$tempiki11 += $tempiki12;
				$tempiki21 += $tempiki22;
				$listiki[$j]['iki1'] = $tempiki11;
				$listiki[$j]['iki2'] = $tempiki21;

				unset($listiki[$k]);

				
			};

		};
};

	$listiki = array_values($listiki);
	$arrlength = count($listiki);

	for($i=0;$i<$arrlength;$i++){
		echo "<tr><td>".$listiki[$i]['tanggal']."</td><td>".$listiki[$i]['iki1']."</td><td>".$listiki[$i]['iki2']."</td></tr>"; 
	}

$con = null;
	

?>