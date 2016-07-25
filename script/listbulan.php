<?php
session_start();

include_once("connection.php");

	date_default_timezone_set("Asia/Makassar");
	$uname = $_SESSION['userName'];
	$tanggal = date("Y-m");
	$tanggal = $tanggal."%";
	
	$sql = $con->prepare("SELECT datapasien.nocm, datapasien.namapasien, iki.id, iki.tanggal, iki.diag, iki.ats, iki.shift, iki.gol FROM datapasien, iki WHERE datapasien.nocm=iki.nocm AND username=:uname AND tanggal LIKE :tanggal");
	$sql->execute(array(':uname' => $uname, ':tanggal' => $tanggal));
	
	$data = $sql->fetchAll(PDO::FETCH_ASSOC);
	$rows = count($data);
	for($i=0;$i<$rows;$i++){
			$no = $i+1;
			$tanggal = $data[$i]['tanggal'];
			$tgl = new DateTime($tanggal);
			$tglbaru = $tgl->format('Y-m-d');
			$jam = $tgl->format('His');
			$jamint = (int)$jam;
		
		if(($data[$i]['shift'] == 3) && ($data[$i]['gol'] == 1) && ($jamint < 90000)){
			
					date_sub($tgl,date_interval_create_from_date_string("1 days"));
					$tglmalam = date_format($tgl, "Y-m-d");
					echo <<<_END
					<tr>
					<td>$no</td>
					<td>$tglmalam</td>	
					<td>{$data[$i]['nocm']}</td>
					<td class="left">{$data[$i]['namapasien']}</td>
					<td class="left">{$data[$i]['diag']}</td>
					<td>&checkmark;</td>
					<td></td>
					<td><a href='script/edit.php?id={$data[$i]['id']}'>Ubah</a>&nbsp<a href='script/hapus.php?id={$data[$i]['id']}'>Hapus</a></td>
					</tr>
_END;
			} else if(($data[$i]['shift'] == 3) && ($data[$i]['gol'] == 2) && ($jamint < 90000)){
				
					date_sub($tgl,date_interval_create_from_date_string("1 days"));
					$tglmalam = date_format($tgl, "Y-m-d");				
				echo <<<_END
					<tr>
					<td>$no</td>
					<td>$tglmalam</td>
					<td>{$data[$i]['nocm']}</td>
					<td class="left">{$data[$i]['namapasien']}</td>
					<td class="left">{$data[$i]['diag']}</td>
					<td></td>
					<td>&checkmark;</td>
					<td><a href='script/edit.php?id={$data[$i]['id']}'>Ubah</a>&nbsp<a href='script/hapus.php?id={$data[$i]['id']}'>Hapus</a></td>
					</tr>
_END;
			} else if($data[$i]['gol'] == 1) {
					echo <<<_END
						<tr>
						<td>$no</td>
						<td>$tglbaru</td>
						<td>{$data[$i]['nocm']}</td>
						<td class="left">{$data[$i]['namapasien']}</td>
						<td class="left">{$data[$i]['diag']}</td>
						<td>&checkmark;</td>
						<td></td>
						<td><a href='script/edit.php?id={$data[$i]['id']}'>Ubah</a>&nbsp<a href='script/hapus.php?id={$data[$i]['id']}'>Hapus</a></td>
						</tr>
_END;
			} else {
				echo <<<_END
			<tr>
			<td>$no</td>
			<td>$tglbaru</td>
			<td>{$data[$i]['nocm']}</td>
			<td class="left">{$data[$i]['namapasien']}</td>
			<td class="left">{$data[$i]['diag']}</td>
			<td></td>
			<td>&checkmark;</td>
			<td><a href='script/edit.php?id={$data[$i]['id']}'>Ubah</a>&nbsp<a href='script/hapus.php?id={$data[$i]['id']}'>Hapus</a></td>
			</tr>
_END;
			}

	};
	
	
			
	$con = null;

?>