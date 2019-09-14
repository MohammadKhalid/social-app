<?php

session_start();

if (!isset($_SESSION["username"])){
    header("Location:index.html");
}

$user = $_POST["user"];
$pass = sha1($_POST["pass"]);

require "connection.php";

    $sql = "SELECT * FROM users WHERE binary username = '$user' and binary password = '$pass' ";
    $result = $conn->query($sql);

    $count = mysqli_num_rows($result);

    if ($count == 1){
        $online = "UPDATE users set on_line = '1' where on_line = '0' and username = '$user'";
        $conn->query($online);
    
        $_SESSION["username"] = $user;
    
        header("Location:home.php");
    }   


    else {
        header("Location:Login.html");
    }

    $conn->close();

?>

