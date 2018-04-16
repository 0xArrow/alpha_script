<?php

require_once("../libs/proxy.php");
require_once("../libs/ip.php");
require_once("../libs/config.php");

$id = $_GET["id"]; //get id number from url
$lnk_lnk = "../$db_name/lnk/$userip.xxx"; //link path
$get_link = file_get_contents($lnk_lnk); //get identifier from file

if ($id == $get_link) {
    $status = 200;
    $m_lnk = fopen($lnk_lnk, "w");
    fwrite($m_lnk, $status);
    fclose($m_lnk);
    header('Location: ../index.php?lnkmsg=Thank you. :)');
} else {
    header("Location: ../index.php?lnkmsg=You did not viewed the short link.");
}

?>