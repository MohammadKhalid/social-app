<?php

session_start();

$user = $_SESSION['registered_user'];

$information = $_POST["information"];

require "connection.php";

$sql = "Update users set description = '$information' where username = '$user'";

if ($conn->query($sql) == TRUE){
     header("Location:upload_register_photo.php");
} else {
    header("Location:Login.html");
}

$conn->close();

?>

