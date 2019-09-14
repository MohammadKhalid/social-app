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
    
     if (!isset($_SESSION['registered_user'])){
     header("Location:Login.html");
     }
 
     $user = $_SESSION['registered_user'];
    
     require "connection.php";
    
     $myphoto = "select username,photo from users where username = '$user'";
     $result = $conn->query($myphoto);
     $row = $result->fetch_assoc();
     $first_photo = $row['photo'];
     $my_user = $row['username'];
  
    ?>
    
    <title>Almost Finished.</title>
    
    <body id = "manage_bg">
        
        <center>
        <div class = "container">
        
            <h1 style = "font-size:40px;">Upload your profile picture!</h1>
            
        </div>
            
        <div class="container-fluid animated bounceInLeft">
            <center>
                <div class = "row">
            
        <form class="form-horizontal animated bounceInLeft" role="form" id = "upload_my_photo.php" action = "upload_my_photo.php" method="post" enctype="multipart/form-data">
                    
                <div class = "col-sm-offset-5 col-sm-2 ">
                    <label class="btn img-responsive">
                             <?php
    echo "<img src='{$first_photo}' class='img-responsive img-circle margin' style='display:inline' alt='Me' width='150' height='150' data-toggle='tooltip' data-placement='bottom' title='Browse photo'>"; ?><input type="file" style="display: none;" name = "fileToUpload">
                    </label>
                </div>
                    
            </div>
                
                 <h2><?php echo $my_user ?></h2>
                
              <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" id = "im_in">Update photo!</button>
                  </div>
                </div>
               
                </center>
                
            </form>
             
            </div>
            
            <br>
     
        
        
            </center>
       
      
    </body>

</html>