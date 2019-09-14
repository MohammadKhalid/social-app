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
    $online = "update is_interested set selected = 1 where selected = 0 and username = '$boy' and ideaID = '$ideaid'";
    $conn->query($online);

    $delete = "delete from notifications where notify_user = '$usersname' and reason = '$appoint'";
    $conn->query($delete);

    $select_candidate = "update idea set number_of_people_working = number_of_people_working + 1,number_of_people_interested = number_of_people_interested - 1 where ideaID = '$ideaid'";
    $conn->query($select_candidate);

 //   $delete_isinterested = "delete from is_interested where selected = 1 and username = '$boy' and ideaID = '$ideaid'";
//    $conn->query($delete_isinterested);
    
    $conn->close();

    header("Location:home.php");



?>