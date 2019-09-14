
$(document).ready(function(){
    
   var interval = setInterval(function(){       
       $.ajax({
           url:'notifydisplay.php',
           success: function(data){
               $('#notifyme').html(data);
               $('[data-toggle="tooltip"]').tooltip();
           }
       });
   },400);
    
});