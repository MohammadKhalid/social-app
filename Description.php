<html>

    <head> </head>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "loginstyle.css">
    <link rel="stylesheet" href="animate.css">
    
    <?php
    
    session_start();

    if (!isset($_SESSION['registered_user'])){
        header("Location:Login.html");
    }
    
    ?>
    
    <body id = "Login_bg">
       
        
        <center>
                        

            <br><br><br>
           <div class="container">
              <h2 class = "animated bounceInRight">Tell us something about yourself!</h2>
               <br>
              <form class="form-horizontal animated bounceInLeft" role="form" id = "description" action="Finalize.php" method="post">
                 <div class="form-group">
                     <br>
                      <textarea maxlength="500" class="form-control" rows="5" id="comment" name = "information"></textarea>
                     <br>
                     <br>
                     <br>
                      <button type="submit" class="btn btn-default" id = "profile">Lets upload your profile picture!</button>
                </div>
        
              </form>
            </div>
            
            
        </center>
    
    </body>

</html>