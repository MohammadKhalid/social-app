<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $username = $_SESSION["username"];

    function get_msg($username){
        
        require('connection.php');
        
        $query = "select * from notifications where notify_user = '$username' and seen = 0";
    
        $run = mysqli_query($conn,$query);
        
        $messages = array();
        
        while ($message = mysqli_fetch_assoc($run)){
            
            $messages[] = array(
                'seen'=>$message['seen'],
               'notify_user'=>$message['notify_user'],
                'reason'=>$message['reason']
            );
            
        }
        
        return $messages;
        
    }


?>