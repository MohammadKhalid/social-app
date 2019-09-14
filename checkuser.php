<?php

 require 'connection.php';

 $username = $_POST["user_name"];

 if (isset($_POST["user_name"])){
     $sql = "select * from users where binary username = '$username'";
     $result = $conn->query($sql);
     $count = mysqli_num_rows($result);
     
     if ($count > 0){
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'>Username not available</span>";
     }
     
     else if ($username == ""){
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'>Username required</span>";
     }
     
     else {
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'>Username available</span>";
     }
 }


?>