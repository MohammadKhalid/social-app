<html>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "DiscoverStyle.css">
    <link rel="stylesheet" href="animate.css">

     <title>Congrats</title>
    
    <?php
    
    session_start();

        if (!isset($_SESSION['registered_user'])){
            header("Location:Login.html");
        }
    
    session_destroy();
    
    
    ?>
    <style>
        
        @font-face{
            font-family:"Roboto-Black";
            src:url(Roboto-Black.ttf);
        }
        
        body{
            
            background-color: gainsboro;
            color: black;
        }
    
    </style>
    
    <body>
        
        <br><br>
        <div class = "container-fluid text-center">
        <img src="happy.png" class='img-responsive margin animated slideInUp' style='display:inline' alt='Me' width='150' height='150'>
        </div>
        <div class = "container text-center">
            <div class = row>
            
                <div class = 'col-sm-1'></div>
                 <div class = 'col-sm-10'><h1 style = "font-family:'Roboto-Black';color:#F44336;" class = "animated bounceInLeft">Congrats!</h1>
                    <h2 class = "animated bounceInLeft">You are an official member of our site.</h2>
                     <p class = "animated bounceInLeft">You'll be able to post your own ideas for gathering the required candidates.</p>
                     <p class = "animated bounceInLeft">Or, you may want to work on an interesting project someone else has posted!</p>
                     <p class = "animated bounceInLeft">Lets head to the Login page so you can access your profile.</p>
                </div>
                 <div class = 'col-sm-1'></div>
            
            </div>
        
        </div>
        
        <div class="container text-center">
              <form class="form-horizontal animated bounceInLeft" role="form" id = "complete" action = "Login.html" method="post">
                  
                  <div class="form-group">        
                  <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-default btn-login" id = "im_in">Lets go!</button>
                      </div>
                      
                  </div>
                  
            </form>
            
            
        </div>
        
        
        
        
        
    </body>
    
    
    
</html>