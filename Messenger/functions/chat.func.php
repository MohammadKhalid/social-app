<?php

    function get_msg(){
        
        $query = "select sender, message from chat";
        $run = mysqli_query($query);
        
        $messages = array();
        
        while ($message = mysqli_fetch_assoc($run)){
            
            $messages[] = array(
            'sender'=>$message['Sender'],
                'message'=>$message['Message']
            );
            
        }
        
        return $messages;
        
    }

    function send_msg($sender,$message){
        
        if (!empty($sender) && !empty($message)){
            
            $sender = mysql_real_escape_string($sender);
            $message = mysql_real_escape_string($message);
            
            $query = "insert into chat(sender,message) values('$sender','$message')";
            
            if ($run = mysqli_query($query)){
                
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
