<?php 


   session_start();


    if (!isset($_SESSION["username"])){

        header("Location:index.html");

    }

    $usersname = $_SESSION["username"];

    require('connection.php');
    require('getnotifications.php');

    $messages = get_msg($usersname);

    if (empty($messages)){
        echo "<a href = 'DisplaySeenNotifications.php'><i class='glyphicon glyphicon-globe' data-toggle='tooltip' data-placement='bottom' title='Seen Notifications'></i></a>";
    }

    else {
            echo "<a href = 'showNotifications.php'>
                   <i class='glyphicon glyphicon-globe green' data-toggle='tooltip' data-placement='bottom' title='Unseen Notifications'>
                       </a>";
    }


?>