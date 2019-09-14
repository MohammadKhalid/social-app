$('#form_input').submit(function(){
    
    var message = $('#message').val();
    var sender = $('#sender').val();
    var sendto = $('#sendto').val();
    
    $.ajax({
       
        url: 'Messenger/Send.php',
        data: {sender:sender,message:message,sendto:sendto},
        success:function(data){
            
            $('#feedback').html(data);
            
            $('#feedback').fadeIn('slow',function(){
               
                $('#feedback').fadeOut(4000);
                
            });
            
            $('#message').val('');
        
        }
        
    });
    
    return false;
});