<?php
    session_start();
    include 'info.php';
    
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

    if(($_SESSION['givenName'] == "jeffry")&&($_SESSION['familyName'] == "khosasi"))
    {
        header('Location: ../product/readManager.php');
        exit();
    }
    else
    {
        header('Location: ../product/readEmploy.php');
        exit();
    }

?>