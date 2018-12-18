<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php"; //menggunakan google api
	$gClient = new Google_Client();
	$gClient->setClientId("720470846370-0bnloj55bjgu8egs9fms8jkl8h8890j2.apps.googleusercontent.com"); //set client id dari credentials di console.developers.google
	$gClient->setClientSecret("tcFYANC61tSdUBBG3j68rQ4k"); //set client secret dari credentials di console.developers.google
	$gClient->setApplicationName("WAKGENG bro"); //set nama untuk redireksi saat login menggunakan google
	$gClient->setRedirectUri("https://damp-fortress-11250.herokuapp.com/auth/g-callback.php"); //set lokasi file yang dituju setelah login berhasil
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile"); //mengambil informasi dari google berupada data pribadi user
?>
