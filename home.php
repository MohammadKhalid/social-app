<html>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href= "loginstyle.css">
    <link rel="stylesheet" href="animate.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    <script>
    
        $(document).ready(function(){
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
    
    </script>
    
    <?php
    
    session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }

    $usersname = $_SESSION["username"];
    
    require "connection.php";
    
        $profile_photo = "SELECT photo from users where binary username = '$usersname'";
        $photo = $conn->query($profile_photo);
        $row = $photo->fetch_assoc();
        $myphoto = $row['photo'];
  
    ?>
    
    <title>Welcome to the website</title>
    
    <body>
        
        <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><div class = "navicons"><a href="Chat_List.php"><i class="glyphicon glyphicon-comment"  data-toggle='tooltip' data-placement='bottom' title='Chat'></i></a></div></li>
        <li><div class = "navicons"><a href="ManageAccount.php"><i class="glyphicon glyphicon-user" data-toggle='tooltip' data-placement='bottom' title='Manage Account'></i></a></div></li>
        <li><div id = "notifyme" class = "navicons"></div></li>
      </ul>
    </div>
  </div>
</nav>
        
        
        
        <div class="container-fluid text-center bg-1">
          <?php
    echo "<img src='{$myphoto}' class='img-responsive img-circle margin' style='display:inline' alt='Me' width='150' height='150'>"; ?>
              <h2><?php echo $usersname ?></h2>
              <p id = "quote">“It’s not about ideas. It’s about making ideas happen.” - <span id = 'quotewriter'>Scott Belsky</span></p>
        </div>
        
          
        
        
        <div class = "container-fluid text-center actions"> 
            
            <br>
            <br>
            <br>
            
            
            
            
            <div class = "row">
                
            <!--    <div class = "col-sm-3">
                
                      <h1 class = "home-heading">Your</h1>
                      <h1 class = "home-heading">Workspace</h1>
                
                </div> -->
                
                
                <div class = "col-sm-4">
            
                <form action = "Projectsphp.php" method="post" class = "animated bounceInLeft">
                    
                        <img src="diagram.png" class="img-responsive" style="display:inline" alt="Me" width="120" height="120"> <br><br><br>
            
                    <button type = "submit" class="btn btn-default button_projects">Projects You Posted</button>
        
                </form>
                
            
                </div>
                
                <div class = "col-sm-4">
                
                <form action = "PostProject.php" method="post" class = "animated bounceInLeft">
                    
                    <img src="illumination.png" class="img-responsive" style="display:inline" alt="Me" width="120" height="120"> <br><br><br>
            
                    <button type = "submit" class="btn btn-default">Post A Project</button>
        
                </form>
                    
                </div>
                
                <div class = "col-sm-4">
                    
                <form action = "Discover.php" method="post" class = "animated bounceInLeft">
                    
                    <img src="planet-earth.png" class="img-responsive" style="display:inline" alt="Me" width="120" height="120"> <br><br><br>
            
                    <button type = "submit" class="btn btn-default">Discover Ideas</button>
        
                </form>
                    
                    
              <!--  <form action = "#" method="post" class = "animated bounceInLeft"> -->
            
              <!--      <button type = "submit" class="btn btn-info btn-reponsive btn-xlarge">Status</button> -->
                    
        
                    
             <!--   </form> -->
                    
                    
                </div>
                
        
            </div>
            
            <br>
            <br>
            
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script src = "Bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src = "Notifications_Refresh.js"></script>
        
      
    </body>

</html>