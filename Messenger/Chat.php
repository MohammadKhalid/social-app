
<?php

    session_start();


    if (!isset($_SESSION["username"])){

        header("Location:index.html");

    }

    $usersname = $_SESSION["username"];

    $receiver = $_SESSION['receiver'];

require('connect.db.php');
require('chat.func.php');

$messages = get_msg($usersname,$receiver);
       
foreach($messages as $message){

    echo '<p class = "message_banda">'.$message['sender'].'</p><br>';
    
 //   echo '<strong>'.$message['receiver'].' Got</strong><br>';
    
    if ($message['sender'] != $usersname){
         echo '<p class = "bubble_2">'.$message['message'].'</p><br>';
    }
    
    else {
        echo '<p class = "bubble">'.$message['message'].'</p><br>';
        
    }
    
}


?>