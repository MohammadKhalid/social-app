<?php

    require "connection.php";
    $username = $_POST['username'];
    $complaint = $_POST['complaint'];

    $query = "insert into complaints(username,complaint) values ('$username','$complaint')";
    $conn->query($query);

    $conn->close();

    header("Location:index.html");

?>