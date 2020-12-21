<?php	
	if (!empty($_POST['getQR'])) { $getQR = $_POST['getQR']; }  else { $getQR = Array(); }
	if (!empty($_POST['getText'])) { $getText = $_POST['getText']; }  else { $getText = Array(); }
	
	
	if (!empty($_POST['qr_prefix'])) { $qr_prefix = $_POST['qr_prefix']; }  else { $qr_prefix = ""; }
	if (!empty($_POST['qr_digits'])) { $qr_digits = $_POST['qr_digits']; }  else { $qr_digits = 5; }
	if (!empty($_POST['qr_startno'])) { $qr_startno = $_POST['qr_startno']; }  else { $qr_startno = 0; }
	if (!empty($_POST['qr_lastno'])) { $qr_lastno = $_POST['qr_lastno']; }  else { $qr_lastno = 0; }
	
	function no2nod ($num, $nod){
		$countNOD = strlen((string) $num);
		$rtn = "";
		switch ($nod - $countNOD){
			case 1: $rtn = "0";
			break;			
			case 2: $rtn = "00";
			break;			
			case 3: $rtn = "000";
			break;			
			case 4: $rtn = "0000";
			break;			
			case 0: $rtn = "";
			break;			
		}		
		return (string)($rtn.$num);
	}
	
	if($qr_startno != 0 && $qr_lastno != 0){
		$no_now = $qr_startno;
		for($xx=0;$xx<=($qr_lastno-$qr_startno);$xx++){
			$getQR[$xx] = "http://qr.geotrees.utmgeo.com/?id=" . $qr_prefix . no2nod($no_now,$qr_digits);
			$getText[$xx] = $qr_prefix . no2nod($no_now,$qr_digits);
			$no_now++;
		}
	}
	
		
	//print_r($getQR);
	//print_r($getText);
	
	foreach($getQR as $x => $x_getQR){
		echo '  <iframe src="./singleqr.php?getQR='.$x_getQR.'&getText='.$getText[$x].'" height="220px" width="220px" scrolling="no"></iframe>
				';
	}
?>