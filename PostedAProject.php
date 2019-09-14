<?php
    
 session_start();

 $title = $_POST["Project_Title"];
 $description = $_POST["Project_Description"];
 $budget = $_POST["Project_Budget"];
 $PostedBy = $_SESSION["username"]; 

 require 'connection.php';
 $postproject = "insert into idea(ideaTitle,ideaDescription,budget,ideaDate,ideaTime,user,number_of_people_interested,number_of_people_working) values('$title','$description','$budget',curdate(),curtime(),'$PostedBy',0,0);";
 $conn->query($postproject);
    
 $conn->close();

 header("Location:home.php");

?>