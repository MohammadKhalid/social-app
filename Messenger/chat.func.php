<?php

    function get_msg($sender,$sendto){
        
        require('connect.db.php');
        
        $query = "select sender, receiver,message from chat where sender in (select sender from chat where 
sender = '$sender') and Receiver in (select Receiver from chat where Receiver = '$sendto') || 
sender in (select sender from chat where 
sender = '$sendto') and Receiver in (select Receiver from chat where Receiver = '$sender')";
        $run = mysqli_query($connection,$query);
        
        $messages = array();
        
        while ($message = mysqli_fetch_assoc($run)){
            
            $messages[] = array(
            'sender'=>$message['sender'],
                'message'=>$message['message'],
                'receiver'=>$message['receiver']
            );
            
        }
        
        return $messages;
        
    }

    function send_msg($sender,$message,$sendto){
        
        if (!empty($sender) && !empty($message) && !empty($sendto)){
            
            require('connect.db.php');
            
            $sender = $connection->real_escape_string($sender);
            $message = $connection->real_escape_string($message);
            $sendto = $connection->real_escape_string($sendto);
            
            $query = "insert into chat(sender,receiver,message) values('$sender','$sendto','$message')";
            
            if ($run = mysqli_query($connection,$query)){
                
                return true;
                
            }
            
            else {
                return false;
            }
            
        }
        
        else {
            return false;
        }
        
    }


?>
