<?php
    require_once "config.php"; //membutuhkan oauth google yang berisi client id , client secret id dan uri yang berada pada google

	if (isset($_SESSION['access_token'])) { // jika access token tersedia
		header('Location: auth/check.php'); //pindah ke index.php
		exit();
	}

    $loginURL = $gClient->createAuthUrl(); //menghasilkan auth url
    header("Location: $loginURL");
?>
