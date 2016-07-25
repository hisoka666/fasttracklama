<?php
session_start();

include_once("connection.php");
	
	date_default_timezone_set("Asia/Makassar");
	$uname = $_SESSION['userName'];
	$tanggal = date("Y-m-d H:i:s");
	$tggl = new DateTime($tanggal);
	$tglbaru = $tggl->format('Y-m-d');
	$tglbaru = $tglbaru."%";
	$jam = $tggl->format('His');
	$jamint = (int)$jam;

	date_sub($tggl,date_interval_create_from_date_string("1 days"));
	$kemarin = date_format($tggl, "Y-m-d");
	$kemarin = $kemarin."%";
	
	if($jamint<=80000){
		
		$sql = $con->prepare("SELECT datapasien.nocm, datapasien.namapasien, iki.tanggal, iki.diag, iki.ats, iki.gol, iki.shift FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username=:uname AND tanggal LIKE :kemarin AND tanggal LIKE :tglbaru AND shift='3'");
		$sql->execute(array(':uname' => $uname, ':kemarin' => $kemarin, ':tglbaru' => $tglbaru));
		
		$data = $sql->fetchAll(PDO::FETCH_ASSOC);
		$rows = count($data);

			for($i=0;$i<$rows;$i++){
					$no = $i+1;
					$tgldb = $data[$i]['tanggal'];
					$tgl = new DateTime($tgldb);
					$tglbaru = $tgl->format('H:i');
					echo <<<_END
					<tr>
					<td class="numbered">$no</td>
					<td>$tglbaru</td>
					<td>{$data[$i]['nocm']}</td>
					<td class="left">{$data[$i]['namapasien']}</td>
					<td class="left">{$data[$i]['diag']}</td>
					<td>{$data[$i]['ats']}</td>
					<td>{$data[$i]['gol']}</td>
					</tr>
_END;
			
			};
	} else {
		

		$sql = $con->prepare("SELECT datapasien.nocm, datapasien.namapasien, iki.tanggal, iki.diag, iki.ats, iki.gol FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username=:uname AND tanggal LIKE :tglbaru");
		$sql->execute(array(':uname' => $uname, ':tglbaru' => $tglbaru));

		$data = $sql->fetchAll(PDO::FETCH_ASSOC);
		$rows = count($data);

			for($i=0;$i<$rows;$i++){
					$no = $i+1;
					$tgldb = $data[$i]['tanggal'];
					$tgl = new DateTime($tgldb);
					$tglbaru = $tgl->format('H:i:s');
					$waktu = $tgl->format('His');
					$waktuint = (int)$waktu;

						if($waktuint > 80000){ //untuk jaga malam lanjut malam biar listnya tidak nyambung
							echo <<<_END
							<tr>
							<td class="numbered">$no</td>
							<td>$tglbaru</td>
							<td>{$data[$i]['nocm']}</td>
							<td class="left">{$data[$i]['namapasien']}</td>
							<td class="left">{$data[$i]['diag']}</td>
							<td>{$data[$i]['ats']}</td>
							<td>{$data[$i]['gol']}</td>
							</tr>
_END;
				} else {
					echo "";
				}
			};	
		
		}
	
	$con = null;
	
?>