<?php

 require 'connection.php';

 $email = $_POST["email"];

 if (isset($_POST["email"])){
     $sql = "select * from users where binary email = '$email'";
     $result = $conn->query($sql);
     $count = mysqli_num_rows($result);
     
     if ($count > 0){
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'>Email already in use</span>";
     }
     
     else if ($email == ""){
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'>Email required</span>";
     }
     
     else {
         echo "<span style = 'color:white; font-family: 'JosefinSans-Bold', sans-serif;'></span>";
     }
 }


?>