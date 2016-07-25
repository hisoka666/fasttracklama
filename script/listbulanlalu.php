<?php
session_start();

include_once("connection.php");
date_default_timezone_set("Asia/Makassar");

	$uname = $_SESSION['userName'];
	$tanggal = date("Y-m");
	$tglubah = new DateTime($tanggal);
	date_sub($tglubah, date_interval_create_from_date_string("1 months"));
	$tgllalu = date_format($tglubah, 'Y-m');
	$tgllalu = $tgllalu."%";
	$sql = $con->prepare("SELECT datapasien.nocm, datapasien.namapasien, iki.tanggal, iki.diag, iki.ats, iki.shift, iki.gol FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username=:uname AND tanggal LIKE :tgllalu");
	$sql->execute(array(':uname' => $uname, ':tgllalu' => $tgllalu));
	$dataArray = $sql->fetchAll(PDO::FETCH_ASSOC);
	$rows = count($dataArray);
	
	for($i=0;$i<$rows;$i++){
			$no = $i+1;
			$tanggal = $dataArray[$i]['tanggal'];
			$tgl = new DateTime($tanggal);
			$tglbaru = $tgl->format('Y-m-d');
			$jam = $tgl->format('His');
			$jamint = (int)$jam;
		
		if(($dataArray[$i]['shift'] == 3) && ($dataArray[$i]['gol'] == 1) && ($jamint < 90000)){
			

					date_sub($tgl,date_interval_create_from_date_string("1 days"));
					$tglmalam = date_format($tgl, "Y-m-d");
					echo <<<_END
					<tr>
					<td class="numbered">$no</td>
					<td>$tglmalam</td>	
					<td>{$dataArray[$i]['nocm']}</td>
					<td class="left">{$dataArray[$i]['namapasien']}</td>
					<td class="left">{$dataArray[$i]['diag']}</td>
					<td>&checkmark;</td>
					<td></td>
					</tr>
_END;
			} else if(($dataArray[$i]['shift'] == 3) && ($dataArray[$i]['gol'] == 2) && ($jamint < 90000)){
				
					date_sub($tgl,date_interval_create_from_date_string("1 days"));
					$tglmalam = date_format($tgl, "Y-m-d");				
				echo <<<_END
					<tr>
					<td class="numbered">$no</td>
					<td>$tglmalam</td>
					<td>{$dataArray[$i]['nocm']}</td>
					<td class="left">{$dataArray[$i]['namapasien']}</td>
					<td class="left">{$dataArray[$i]['diag']}</td>
					<td></td>
					<td>&checkmark;</td>
					</tr>
_END;
			} else if($dataArray[$i]['gol'] == 1) {
					echo <<<_END
						<tr>
						<td class="numbered">$no</td>
						<td>$tglbaru</td>
						<td>{$dataArray[$i]['nocm']}</td>
						<td class="left">{$dataArray[$i]['namapasien']}</td>
						<td class="left">{$dataArray[$i]['diag']}</td>
						<td>&checkmark;</td>
						<td></td>
						</tr>
_END;
			} else {
				echo <<<_END
			<tr>
			<td class="numbered">$no</td>
			<td>$tglbaru</td>
			<td>{$dataArray[$i]['nocm']}</td>
			<td class="left">{$dataArray[$i]['namapasien']}</td>
			<td class="left">{$dataArray[$i]['diag']}</td>
			<td></td>
			<td>&checkmark;</td>
			</tr>
_END;
			}

	};
	
	
			
	$con = null;


?>