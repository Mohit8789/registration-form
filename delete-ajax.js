var deleteData = function(id){
    $.ajax({    
        type: "GET",
        url: "delete-user.php", 
        data:{id:id},            
        dataType: "html",                  
        success: function(data){   
        $('#msg').html(data);
       $('#table-container').load('user-list.php');
           
        }
    });
};