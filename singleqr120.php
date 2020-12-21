<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
    position: relative;
    text-align: center;
    color: black;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.top-centered {
    position: absolute;
    top: 3%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.bottom-centered {
    position: absolute;
    bottom: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.bottom2-centered {
    position: absolute;
    bottom: -8%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
</head>
<body>
<?php
	if (isset($_GET['getQR'])){ $getQR = $_GET['getQR'];} 
	if (isset($_GET['getText'])){ $getText = $_GET['getText'];}
	
	if (!empty($getQR) && !empty($getText)) {
		echo '
		<div class="container">
			<img src="https://chart.googleapis.com/chart?chs=120x120&cht=qr&chl='.$getQR.'&choe=UTF-8" alt="Norway" style="width:100px;">

			<div class="top-centered" style="font-size: 9px;font-weight: bold;" >
				<img src = "http://geotrees.rotu.my/qrgen/playstore.png" height="10px" /> GeoTrees
			</div>
			<div class="bottom2-centered" style="font-size: 10px;font-weight: bold;" >'.$getText.'
			<div class="bottom-centered" style="font-size: 8px;">			
				<!--img src = "./chrome.png" height="10px" /--> &nbsp;http://geotrees.utmgeo.com
			</div>
		</div>
		';
	}
?>

</body>
</html> 
