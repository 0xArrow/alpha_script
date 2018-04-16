<?php
       require_once("faucethub.php");
       
       $lnk_lnk = "../$db_name/lnk/$userip.xxx"; //link path
       if (file_exists($lnk_lnk)) {
           $check_link = file_get_contents($lnk_lnk); //get link from file
           if ($check_link == 200) {
               $amount += $extra;
           }
       }
       
       $faucethub = new FaucetHub($api_fh, $btc);
       $result = $faucethub->send($addy, $amount, "false", $userip);
       if ($result["success"] === true){
       
           $msg = "ua=$addy&s=t&a=$amount&o=fh";
           header('Location: ../index.php?'.$msg.'');
           $ct = time(); //time now
          
           $status = "done";
          
           $w_addy = fopen($time_addy, "w");
           fwrite($w_addy, $ct); //save time to addy
           fclose($w_addy);
          
           $w_ip = fopen($time_ip, "w");
           fwrite($w_ip, $ct); //save time to ip
           fclose($w_ip);
           
           $m_lnk = fopen($lnk_lnk, "w");
           fwrite($m_lnk, $status);
           fclose($m_lnk);
          
       } else {
       $errmsg = $result["message"];
       header('Location: ../index.php?errmsg='.$errmsg.'');
       }
       if (!empty($ref) && $addy != $ref) {
           $ref_amount = ($referral / 100) * $amount;
           $reefResult = $faucethub->sendReferralEarnings($ref, $ref_amount, $userip);
       }


?>