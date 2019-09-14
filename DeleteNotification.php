<?php

    session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $usersname = $_SESSION["username"];
    $appoint = $_POST["candidate"];

    $arr = explode(' ',trim($appoint));
    $boy = $arr[0];
    $ideaid = $arr[6];
    
    require 'connection.php';
    $online = "delete from notifications where notify_user = '$usersname' and reason = '$appoint'";
    $conn->query($online);

    $deleteIsinterested = "delete from is_interested where ideaID = '$ideaid' and username = '$boy'";
    $conn->query($deleteIsinterested);

    $conn->close();
    header("Location:DisplaySeenNotifications.php");



?>