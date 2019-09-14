<html>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "PostStyle.css">
    <link rel="stylesheet" href="animate.css">
    <style>
       
    </style>
    <?php
    
        session_start();
    
        if (!isset($_SESSION["username"])){
        
            header("Location:Login.html");
    
        }

    $usersname = $_SESSION["username"];
    
    ?>
    
    <title>Post A New Project</title>
    
    <body>
        
          <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><i class = 'glyphicon glyphicon-home'></i></a>
    </div>
  </div>
</nav>
        
        
        <center>
        <h1>Post A New Idea!</h1>
            
        
        <div class="container-fluid text-center bg-1">
              <img src="light-bulb.png" class="img-responsive img-circle margin" style="display:inline" alt="Me" width="150" height="150">
        </div>
        
         <br>
        
            <div class="container">
              
                <div class="row">
                    <div class="col-md-12">
                    <form class="form-horizontal animated bounceInLeft" role="form" id = "register_form" action = "PostedAProject.php" method="post">
                <div class="form-group">
                    <div class="row">
                  <label class="control-label col-md-2" for="projecttitle">Project Title:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="ProjectTitleInput" placeholder="Project Title" name = "Project_Title">
                  </div>
                        </div>
                </div>
                  
                  
                   <div class="form-group">
                    <div class="row">
                  <label class="control-label col-md-2" for="description">Description:</label>
                  <div class="col-md-8">
                   <textarea class="form-control" rows="5" id="ProjectDescription" name = "Project_Description" placeholder="Enter Description"></textarea>
                  </div>
                       </div>
                </div>
                  
                  
                  <div class="form-group">
                    <div class="row">
                  <label class="control-label col-md-2" for="budget">Budget:</label>
                  <div class="col-md-8">
                    <input type="number" class="form-control" id="ProjectBudgetInput" placeholder="Enter budget" name = "Project_Budget">
                  </div>
                      </div>
                </div>
                  
                  
                <div class="form-group">        
                    <div class="row">
                        <div class="col-md-4"></div>
                    <button type="submit" class="btn btn-default animated bounceInLeft col-md-4" id = "PostPButton">GO!</button>
                    </div>
                </div>
                  
                  
              </form>
                    </div>
                </div>
            </div>
        
        
        </center>
        
    </body>
        
</html>