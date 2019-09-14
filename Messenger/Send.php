<?php

require('connect.db.php');
require('chat.func.php');

if (isset($_GET['sender']) && !empty($_GET['sender'])){
    $sender = $_GET['sender'];
    
    if (isset($_GET['message']) && !empty($_GET['message'])){
        $message = $_GET['message'];
        $sendto = $_GET['sendto'];
        
        if(send_msg($sender,$message,$sendto)){
            
        //    echo "Message Sent";
            
        } else {
            echo "Message wasn't sent";
        }
        
    } else {
        echo "No message was entered";
    }
} else {
    echo "No Name was entered";
}


?>