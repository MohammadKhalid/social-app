<html>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel = "stylesheet" href = "Bootstrap/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src = "Bootstrap/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href= "DiscoverStyle.css">
    <link rel="stylesheet" href="animate.css">

     <title>Ooops</title>
    
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
        
        <br>
        <div class = "container-fluid text-center">
        <img src="sad.png" class='img-responsive margin' style='display:inline' alt='Me' width='150' height='150'>
        </div>
        <div class = "container text-center">
            <div class = row>
            
                <div class = 'col-sm-1'></div>
                 <div class = 'col-sm-10'><h2 style = "font-family:'Roboto-Black';color:#F44336;">We're sorry if you're facing problems with our site, it is only in its Alpha stages.</h2>
                </div>
                 <div class = 'col-sm-1'></div>
            
            </div>
        
        </div>
        
         <div class="container text-center">
               <div class = "row">
                   <div class="col-sm-12">
              <form class="form-horizontal animated bounceInLeft" role="form" id = "complaint_form" action = "complaint.php" method="post">
                <div class="form-group">
                  <h2>Your  username:</h2>
                  <div class="col-sm-12 col-md-offset-3 col-md-6">
                   
                      <?php
                  echo "<input type='text' class='form-control' id='username' placeholder='Username' name = 'username'>";
    
                        ?>
                  </div>
                </div>
                  
                  
                   <div class="form-group">
                     <div class="col-sm-12 col-md-offset-3 col-md-6">  
                         <h2>Your Complaint:</h2>
                         
                         <?php
                         
                 echo  "<textarea class='form-control' rows='5' id='complaint' name = 'complaint'></textarea>"
                          
                          ?>
                       </div>
                </div>
                  
                  
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" id = "submitcomplaint">Send.</button>
                  </div>
                </div>
                  
                  
              </form>
             </div>
                   </div>
            </div>
        
        
        
        
        
    </body>
    
    
    
</html>