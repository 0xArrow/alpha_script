<?php
if(@fsockopen($_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1)) {
    $msg = "<b style='color:red;'>Sorry, no Proxy is allowed!</b>";
    header('Location: ./index.php?msg='.$msg.'');
}
function checkProxy($ip){
		$contactEmail="EMAIL";
		$timeout=3; 
		$banOnProability=0.99;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_URL, "http://check.getipintel.net/check.php?ip=$ip");
		$response=curl_exec($ch);
		curl_close($ch);
		
		if ($response > $banOnProability) {
				return true;
		} else {
			if ($response < 0 || strcmp($response, "") == 0 ) {
			}
				return false;
		}
}
$ip=$_SERVER['REMOTE_ADDR'];
if (checkProxy($ip)) {
    $msg = "<b style='color:red;'>Sorry, no Proxy is allowed!</b>";
    header('Location: ./index.php?msg='.$msg.'');
}
?>