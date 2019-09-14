
$(document).ready(function(){
    
   var interval = setInterval(function(){
    //   var textarea = document.getElementById('messages');
    //   textarea.scrollTop = textarea.scrollHeight;
       
       $.ajax({
           url:'Messenger/Chat.php',
           success: function(data){
               $('#messages').html(data);
           }
       });
   },500);
});