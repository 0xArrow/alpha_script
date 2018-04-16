<?php

require_once("../libs/proxy.php");
require_once("../libs/config.php");
require_once("../libs/ip.php");

$rnd = intval(rand(1000,9999)); //generate random number
$lnk_lnk = "../$db_name/lnk/$userip.xxx"; //link path
$api_url = "http://prol.ink/api/?api=$prolink_api&url=$site_url/links/verifier.php?id=$rnd&format=text";
$get_link = file_get_contents($api_url);
if (!empty($get_link)) {
    $m_lnk = fopen($lnk_lnk, "w"); //open link file
    fwrite($m_lnk, $rnd); //store random value
    fclose($m_lnk);
    header('Location: '.$get_link.'');
} else {
    header("Location: ../index.php?lnkmsg=Unknown Error.");
}

?>