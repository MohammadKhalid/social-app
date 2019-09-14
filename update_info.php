<?php


    session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }

    $usersname = $_SESSION["username"];
    
    require "connection.php";

    $information = $_POST['information'];
    $name = $_POST['fullname'];
    $password = sha1($_POST['password']);

    $query = "update users set name = '$name', description = '$information' , password = '$password' where binary username = '$usersname'";

    $conn->query($query);

    header("Location:ManageAccount.php");


?>