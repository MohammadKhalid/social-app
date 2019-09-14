<?php

session_start();

require "connection.php";

$user = $_POST["name"];
$pass = sha1($_POST["password"]);
$em = $_POST["email"];
$fn = $_POST["fullname"];

$sql = "INSERT INTO users(email,username,on_line,name,password,description,photo) VALUES ('$em','$user','0','$fn','$pass','wait','uploads/male-user-profile-picture.png')";

if ($conn->query($sql) == TRUE){
     $_SESSION['registered_user'] = $user;
     header("Location:Description.php");
} else {
    header("Location:Login.html");
}

$conn->close();

?>

