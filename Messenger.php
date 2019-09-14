
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <title>Chat Application</title>
        
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="animate.css">
        
        <link type ="text/css" rel ="stylesheet" href="Messenger/main.css">
        
    </head>
    
    <script>  
    
    </script>
    
    <body>
        
          <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><i class = 'glyphicon glyphicon-home home'></i></a>
    </div>
  </div>
</nav>
        
        <div id = "input">
        
            <div id = "feedback"></div>
            
            <?php
            
            
             session_start();

            require('Messenger/core.inc.php');
    
            if (!isset($_SESSION["username"])){
        
                header("Location:index.html");
    
            }

            $usersname = $_SESSION["username"];
            
            $sendto = $_POST["sendto"];
            
            $_SESSION['receiver'] = $sendto;
            
            echo    "<center> <div id = 'messages'>

            </div>
            
            
            <form action = '#' method = 'post' id = 'form_input'>

                    <label><input type = 'hidden' name = 'sender' id ='sender' value = '{$usersname}'></label>
                    <label><input type = 'hidden' name = 'sendto' id ='sendto' value = '{$sendto}'></label>
                    <label><br> <textarea id = 'message' cols = '25' rows = '4'></textarea></label><br>
                    <input type = 'submit' name = 'send' value = 'Send' id = 'send'>

                </form>
            </center>
        </div>";
    
    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="Messenger/auto_chat.js"></script>
        <script src = "Messenger/Send.js"></script>
        
                        
        </body>
        
</html>
