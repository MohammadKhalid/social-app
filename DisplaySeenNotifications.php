<html>
<head>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script src = "Bootstrap/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "DiscoverStyle.css">
    <link rel="stylesheet" href="animate.css">
    
    <script>
    
    $(document).ready(function(){
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
        
    
    </script>
    
    <body>

<?php


 session_start();


    if (!isset($_SESSION["username"])){

        header("Location:index.html");

    }

    $usersname = $_SESSION["username"];

    require('connection.php');
    require('SeenNotifications.php');
        
              echo   "<nav class='navbar navbar-default'>
  <div class='container'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='home.php'><i class = 'glyphicon glyphicon-home'></i></a>
    </div>
  </div>
</nav>";

    $messages = get_msg($usersname);

        foreach($messages as $message){
            
            $candidate = $message['reason'];
            
            $appoint = $message['reason'];
            $arr = explode(' ',trim($appoint));
            $boy = $arr[0];
            $ideaid = $arr[6];
            
            $whichidea = "select ideaTitle from idea where ideaID = '$ideaid'";
            $result = $conn->query($whichidea);
            $row = $result->fetch_assoc();
            $ideaname = $row['ideaTitle'];
            
            echo "<div class = 'container'><table class = 'table table-bordered'><tbody><tr><td>
                  <p>" .$boy. " is interested in your idea <strong>'" .$ideaname. "'.</strong></p></td></tr></tbody></table>";
            
             echo "<center><div class = 'row'><div class = 'col-sm-4'><form action = 'Select.php' method='post' class = 'animated bounceInLeft'>
            
                    <button type = 'submit' class='btn btn-default' name ='candidate' value ='{$candidate}' data-toggle='tooltip' data-placement='bottom' title='Select candidate'><i class='glyphicon glyphicon-ok'></i></button>
        
                </form></div>";
            
             echo "<div class = 'col-sm-4'><form action = 'ShowProfile.php' method='post' class = 'animated bounceInLeft'>
            
                    <button type = 'submit' class='btn btn-default' name ='candidate' value ='{$candidate}' data-toggle='tooltip' data-placement='bottom' title='Go to his profile'><i class='glyphicon glyphicon-hand-right'></i></button>
        
                </form></div>";
            
            echo "<div class = 'col-sm-4'><form action = 'DeleteNotification.php' method='post' class = 'animated bounceInLeft'>
            
                    <button type = 'submit' class='btn btn-default' name ='candidate' value ='{$candidate}'  data-toggle='tooltip' data-placement='bottom' title='Delete Notification'><i class='glyphicon glyphicon-trash'></i></button>
        
                </form></div></div></div>";

        }
        
        if (empty($message)){
            echo "<div class='container-fluid text-center'>";
           echo "<img src='cactus.png' class='img-responsive' style='display:inline' alt='cactus' width='200' height='200'>
           <h1>Empty as a desert...</h1></div>";
        }

    $seen = "update notifications set seen = 1 where seen = 0 and notify_user = '$usersname'";
    $conn->query($seen);

?>
        
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script src = "Bootstrap/js/bootstrap.min.js"></script>
        
         </body>
    
    </head>
    
</html>