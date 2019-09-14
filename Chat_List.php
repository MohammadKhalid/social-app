<html>
    
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "loginstyle.css">
    <link rel="stylesheet" href="animate.css">

     <title>Welcome to the website</title>
    
    <body id = "chatbg">

<?php

    session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $usersname = $_SESSION["username"];
    
    require 'connection.php';

        $list = "select distinct users.username,
                photo,on_line,name from users,idea,is_interested where users.username in 
                (select users.username from users,is_interested where users.username = is_interested.username
                and is_interested.ideaID = idea.ideaID and selected = 1 and idea.user = '$usersname') 
                || users.username in (select idea.user from users,is_interested,idea
                 where is_interested.username = '$usersname' and 
                is_interested.ideaID = idea.ideaID);";
        
    $result = $conn->query($list);
        
          echo   "<nav class='navbar navbar-default'>
  <div class='container'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='home.php'><i class = 'glyphicon glyphicon-home'></i></a>
    </div>
  </div>
</nav>";
        
        echo "<h2 style = 'text-align:center;font-size:50px;'>Your clients</h2>";

    while ($row = $result->fetch_assoc()){
        echo "<center><form action = 'Messenger.php' method='post' class = 'animated bounceInLeft'>
            
                    <input type = 'image' src = '{$row['photo']}' onclick='this.form.submit()' class='img-responsive img-circle margin' name = 'sendto' id = 'sendto' value = '{$row['username']}' style='display:inline;margin-bottom:15px;' alt='Me' width='100' height='100'> </form>
                    <h2>{$row['name']}"; 
                    
                    if ($row['on_line'] == 1){
                        
                        echo "<span><i class = 'glyphicon glyphicon-ok-sign green_sign'></i></span>";
                
                    }
        
                  echo "</h2>
                    </center>";
    }


?>
        
    </body>
    
</html>