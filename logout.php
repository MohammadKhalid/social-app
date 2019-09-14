<?php

  session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $usersname = $_SESSION["username"];
    
    require 'connection.php';
    $online = "update users set on_line = '0' where on_line = '1' and username = '$usersname'";
    $conn->query($online);
    
    $conn->close();

    session_destroy();
    
    header("Location:index.html");


?>