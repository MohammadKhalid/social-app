<html>
    
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "DiscoverStyle.css">
    <link rel="stylesheet" href="animate.css">

     <title>Welcome to the website</title>
    
    <body>

<?php

 session_start();
    
    if (!isset($_SESSION["username"])){
        
        header("Location:index.html");
    
    }

    $usersname = $_SESSION["username"];

    require 'connection.php';
        
    $projects = "select ideaID,ideaTitle,ideaDescription,ideaDate,ideaTime,budget,number_of_people_interested,number_of_people_working from idea , users where idea.user <> users.username and users.username = '$usersname'";
    
    $result = $conn->query($projects);
        
      echo   "<nav class='navbar navbar-default'>
  <div class='container'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='home.php'><i class = 'glyphicon glyphicon-home'></i></a>
    </div>
  </div>
</nav>";

       echo  "<div class='container-fluid text-center bg-1'>
              <img src= 'planet-earth-1.png' class='img-responsive' style='display:inline' alt='world' width='200' height='200'>
        </div>";
        
        
    if ($result->num_rows > 0) {
        
        
    while($row = $result->fetch_assoc()){
        $id = $row['ideaID'];
    echo "<br><br><div class = 'container'><table class = 'table table-bordered'><tbody><tr><td class = 'info'><h2 style = 'text-align:center;'>Title</h2>";    
       echo "<p style = 'text-align:center;'>" .$row["ideaTitle"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'desc'><h2 style = 'text-align:center;'>Description</h2><p style = 'text-align:center;'>" .$row["ideaDescription"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'other'><h2 style = 'text-align:center;'>Budget</h2><p style = 'text-align:center;'>" .$row["budget"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'other'><h2 style = 'text-align:center;'>Date</h2><p style = 'text-align:center;'>" .$row["ideaDate"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'other'><h2 style = 'text-align:center;'>Time</h2><p style = 'text-align:center;'>" .$row["ideaTime"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'other'><h2 style = 'text-align:center;'>People Working</h2><p style = 'text-align:center;'>" .$row["number_of_people_working"] . "</p></td></tr></tbody>
<tbody><tr><td class = 'people'><h2 style = 'text-align:center;'>People interested</h2><p style = 'text-align:center;'>" .$row["number_of_people_interested"] . "</p></td></tr></tbody></table><br>
      <center> <form action = 'Interested.php' method='post' class = 'animated bounceInLeft'>
            
            <button type = 'submit' class='btn btn-default' name ='id' value ='{$id}'>I'm interested</button>
        
        </form></center></div>";

    }
        
    }
        
        $conn->close();

?>
    
    
    
      </body>

</html>