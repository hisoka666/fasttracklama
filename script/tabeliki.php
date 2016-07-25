<?php
session_start();
date_default_timezone_set("Asia/Makassar");
include_once("connection.php");

	$uname = $_SESSION['userName'];
	
	$jmlhari = cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));
		
		
		
		// Buat array untuk setiap tanggal dalam database
		for($i=0;$i<$jmlhari;$i++){
			$a=$i+1;
			$tanggal = new DateTime(date('Y-m').'-'.$a);
			$tglsql = $tanggal->format('Y-m-d');

			//Query untuk mencari entry tiap tanggal 
				$sql = $con->query("SELECT gol, shift, tanggal FROM iki WHERE username='$uname' AND tanggal LIKE '$tglsql %'");
				
				
				$iki1 = 0; //Set variable untuk iki1
				$iki2 = 0; //Set variable untuk iki2
				$iki3 = 0;
				$iki4 = 0;

				//Buat Associative Array untuk tiap entry tanggal
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

	$arrlength = count($listiki);

	

	
	for($i=0;$i<$arrlength;$i++){

		echo "<tr><td>".$listiki[$i]['tanggal']."</td><td>".$listiki[$i]['iki1']."</td><td>".$listiki[$i]['iki2']."</td></tr>";

		};

	$con = null;

?>