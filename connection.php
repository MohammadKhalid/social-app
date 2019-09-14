<?php
$conn = new mysqli("localhost", "root", "adil","login");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>