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
    bottom: -8px;
    left: -5px;
}

.top-left {
    position: absolute;
    top: -5px;
    left: -5px;
}

.top-right {
    position: absolute;
    top: -5px;
    right: -5px;
}

.bottom-right {
    position: absolute;
    bottom: -8px;
    right: -5px;
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
			<img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl='.$getQR.'&choe=UTF-8" alt="Norway" style="width:200px;">

			<div class="top-left">
				<img src = "./logo_onsemi.png" width="25px" />
			</div>
			<div class="top-right">
				<img src = "./logo_um.png" width="25px" />
			</div>
			<div class="bottom-left">
				<img src = "./logo_mytreevolution.png" width="25px" />
			</div>
			<div class="bottom-right">
				<img src = "./logo_utm.png" width="25px" />
			</div>
			<div class="bottom2-centered" style="font-size: 13px;font-weight: bold;" >'.$getText.'
			<div class="bottom-centered" >			
				<!--img src = "http://geotrees.rotu.my/qrgen/chrome.png" height="10px" /--> &nbsp;<font size="1">http://geotrees.utmgeo.com </font>
			</div>
		</div>
		';
	}
?>

</body>
</html> 
