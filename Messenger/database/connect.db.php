<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "adil";

    $db_name = "test";

   if ($connection = new mysqli($db_host,$db_user,$db_pass,$db_name)){
       echo "Connected to Database<br>";
   }

    else {
        echo "Cannot connect to Database<br>";
    }

?>