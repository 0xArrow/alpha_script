<?php

//check proxy
if(@fsockopen($_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1)) {
    $msg = "Sorry, no Proxy is allowed!";
    header('Location: ../index.php?msg='.$msg.'');
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
    $msg = "Sorry, no Proxy is allowed!";
    header('Location: ../index.php?msg='.$msg.'');
}

//default timezone
date_default_timezone_set("UTC");

//get user ip
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $getip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $getip = $forward;
    }
    else
    {
        $getip = $remote;
    }
    return $getip;
}

$userip = getUserIP(); //get user ip
$time = time();
require_once("config.php");

//verify captcha
if(isset($_POST['g-recaptcha-response'])) {
   $capResponse = $_POST['g-recaptcha-response'];
   $pingCaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$capResponse&remoteip=$userip");
   $jsonCaptcha = json_decode($pingCaptcha, TRUE);
   $captchaSuccess = $jsonCaptcha["success"];
   
   if ($captchaSuccess == "true") {
       $timer = $faucet_timer * 60;
       $addy = $_POST["addy"]; //get addy
       $ref = $_POST["ref"]; //get ref addy
       $opt = $_POST["option"]; //get option
       $time_addy = "../$db_name/addy/$addy.xxx"; //time of addy
       $time_ip = "../$db_name/ip/$userip.xxx"; //time of ip
       $ref_file = "../$db_name/ref/$addy.xxx"; //store ref
   
       if (!file_exists($time_addy)) {
           $write_addy = fopen($time_addy, "w");
           fclose($write_addy);
       }

       if (!file_exists($time_ip)) {
           $write_ip = fopen($time_ip, "w");
           fclose($write_ip);
       }

       if (!file_exists($ref_file) && !empty($ref)) {
           $crt_rf = fopen($ref_file, "w");
           fwrite($crt_rf, $ref);
           fclose($crt_rf);
       }

       if (file_exists($ref_file)) {
           $xref = file_get_contents($ref_file);
           $ref = $xref;
       }
       $btc = "BTC";
       if (file_exists($time_addy) && file_exists($time_ip)) {

           $open_addy = file_get_contents($time_addy);
           $open_ip = file_get_contents($time_ip);

           if (empty($open_addy) && empty($open_ip)) {
               if ($opt == "fh") {
                   require_once("send_fh.php");
               } elseif ($opt == "fs") {
                   require_once("send_fs.php");
               } else {
                   $msg = "Fuck you";
                   header('Location: ../index.php?msg='.$msg.'');
               }
           }

           if (!empty($open_ip) && !empty($open_addy)) {
               $t_addy = time() - $open_addy; //verify time in addy
               $t_ip = time() - $open_ip; //verify time in ip
               if ($t_addy > $timer && $t_ip > $timer) {
                   if ($opt == "fh") {
                       require_once("send_fh.php");
                   } elseif ($opt == "fs") {
                       require_once("send_fs.php");
                   }
               } else {
                   if ($t_addy < $timer) {
                       $te = $timer - $t_addy; //verify addy time
                       $tem = intval($te / 60);
                       $msg = "You must have to wait $tem minutes before next claim.";
                       header('Location: ../index.php?msg='.$msg.'');
                   } elseif ($t_ip < $timer) {
                       $te = $timer - $t_ip; //verify ip time
                       $tem = intval($te / 60);
                       $msg = "Your IP will be available for next claim after $tem minutes.";
                       header('Location: ../index.php?msg='.$msg.'');
                   }
               }

           }
           if (!empty($open_ip) && empty($open_addy)) {
               $t_ip = time() - $open_ip; //verify time in ip
               if ($t_ip > $timer) {
                   if ($opt == "fh") {
                       require_once("send_fh.php");
                   } elseif ($opt == "fs") {
                       require_once("send_fs.php");
                   }
               } elseif ($t_ip < $timer) {
                   $te = $timer - $t_ip; //verify ip time
                   $tem = intval($te / 60);
                   $msg = "Your IP will be available for next claim after $tem minutes.";
                   header('Location: ../index.php?msg='.$msg.'');
               }
           }
           if (empty($open_ip) && !empty($open_addy)) {
               $t_addy = time() - $open_addy; //verify time in addy
               if ($t_addy > $timer) {
                   if ($opt == "fh") {
                       require_once("send_fh.php");
                   } elseif ($opt == "fs") {
                       require_once("send_fs.php");
                   }
               } elseif ($t_addy < $timer) {
                   $te = $timer - $t_addy; //verify addy time
                   $tem = intval($te / 60);
                   $msg = "You must have to wait $tem minutes before next claim.";
                   header('Location: ../index.php?msg='.$msg.'');
               }
           }
       }
    } else {
       $msg = "Your Captcha Was Invalid.";
       header('Location: ../index.php?msg='.$msg.'');
    }
} else {
header('Location: ../index.php');
}
?>
