<html>
    
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
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }


    $usersname = $_SESSION["username"];
    $appoint = $_POST["candidate"];
    $arr = explode(' ',trim($appoint));
    $boy = $arr[0];
    $ideaid = $arr[6];
    
    require 'connection.php';
    
    $showprofile = "select name,description,photo from users where username = '$boy'";
    $result = $conn->query($showprofile);

    $row = $result->fetch_assoc();

    $photo = $row['photo'];
?>
    
<title>Manage</title>
    
     <body id = "profile_bg">
         
          <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><i class = 'glyphicon glyphicon-home home'></i></a>
    </div>
  </div>
</nav>
         
         
         <div class = "container text-center">
         
             <p class = "interestedheading">Client Interested</p>
             
         </div>
         
         <div class="container-fluid text-center">
          <?php
    echo "<img src='{$photo}' class='img-responsive img-circle margin' style='display:inline' alt='Me' width='150' height='150'>"; ?>
              <h2><?php echo $row['name'] ?></h2>
        </div>
         
         <div class = "container-fluid text-center">
         
             <p><?php echo $row['description'] ?></p>
         
         </div>
         
         
    </body>

</html>