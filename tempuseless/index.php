<?php
	session_start(); //start
	include 'info.php';

	if (!isset($_SESSION['access_token'])) { //jika tidak memiliki access token
		header('Location: login.php'); //kembali ke login.php
		exit();
	}
	

	//buat informasi jadi JSON
	$myInfo = new info;
	$myInfo->kode = $_SESSION['id'];
	$myInfo->email = $_SESSION['email'];
	$myInfo->gender = $_SESSION['gender'];
	$myInfo->picture = $_SESSION['picture'];
	$myInfo->familyName = 	$_SESSION['familyName'];
	$myInfo->givenName = $_SESSION['givenName'];

	$infoJSON = json_encode($myInfo);
	echo $infoJSON;
	header('Location: ../product/read.php');

?>

