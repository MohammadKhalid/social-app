<html>
    
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "loginstyle.css">
    <link rel="stylesheet" href="animate.css">
    
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
    
        $update_info = "SELECT name,description from users where binary username = '$usersname'";
        $result = $conn->query($update_info);
        $row_2 = $result->fetch_assoc();
        $name = $row_2['name'];
        $description = $row_2['description'];
  
    ?>
    
    <title>Manage</title>
    
    <body id = "manage_bg">
        
            <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><i class = 'glyphicon glyphicon-home home'></i></a>
    </div>
  </div>
</nav>
        
        <center>
        <div class = "container">
        
            <h1>Manage your Account</h1>
            
        </div>
            
        <div class="container-fluid animated bounceInLeft">
            <center>
                <div class = "row">
            
        <form class="form-horizontal animated bounceInLeft" role="form" id = "register_form" action = "upload_photo.php" method="post" enctype="multipart/form-data">
                    
                <div class = "col-sm-offset-5 col-sm-2 ">
                    <label class="btn img-responsive">
                             <?php
    echo "<img src='{$myphoto}' class='img-responsive img-circle margin' style='display:inline' alt='Me' width='150' height='150' data-toggle='tooltip' data-placement='bottom' title='Browse photo'>"; ?><input type="file" style="display: none;" name = "fileToUpload">
                    </label>
                </div>
                    
            </div>
                
                 <h2><?php echo $usersname ?></h2>
                
              <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" id = "im_in">Update photo!</button>
                  </div>
                </div>
               
                </center>
                
            </form>
             
            </div>
            
            <br>
     
         <div class="container">
               <div class = "row">
                   <div class="col-sm-12">
              <form class="form-horizontal animated bounceInLeft" role="form" id = "update_form" action = "update_info.php" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-offset-1 col-sm-4" for="name">Full Name :</label>
                  <div class="col-sm-4">
                   
                      <?php
                  echo "<input type='text' class='form-control' id='fullname' placeholder='Full name' name = 'fullname' value = '{$name}'>";
    
                        ?>
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="control-label  col-sm-offset-1 col-sm-4" for="pwd">Password : </label>
                  <div class="col-sm-4">          
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name = "password">
                  </div>
                </div>
                  
                  
                   <div class="form-group">
                     <div class="col-sm-12 col-md-offset-3 col-md-6">  
                         <h2>Your info</h2>
                         
                         <?php
                         
                 echo  "<textarea class='form-control' maxlength='500' rows='5' id='update_info' name = 'information'>{$description}</textarea>"
                          
                          ?>
                       </div>
                </div>
                  
                  
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" id = "updateprofile">Update my profile!</button>
                  </div>
                </div>
                  
                  
              </form>
             </div>
                   </div>
            </div> 
        
            </center>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script src = "Bootstrap/js/bootstrap.min.js"></script>
      
    </body>

</html>