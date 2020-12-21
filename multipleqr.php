<?php	
	if (!empty($_POST['getQR'])) { $getQR = $_POST['getQR']; }  else { $getQR = Array(); }
	if (!empty($_POST['getText'])) { $getText = $_POST['getText']; }  else { $getText = Array(); }
	
	//print_r($getQR);
	//print_r($getText);
	
	foreach($getQR as $x => $x_getQR){
		echo '  <iframe src="http://geotrees.rotu.my/qrgen/singleqr.php?getQR='.$x_getQR.'&getText='.$getText[$x].'" height="220px" width="220px" scrolling="no"></iframe>
				';
	}
?>