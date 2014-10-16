jQuery(document).ready(function($){
 
    $('#comment-form').on('submit', function(){ 
				 
       // ajax post method to pass form data to the 
        $.post(
            $(this).prop('action'), $(this).serialize(),
            function(data){
                //response after the process. 
                console.log(data);
            },
            'json'
        ); 
       
        return false;
    }); 
});