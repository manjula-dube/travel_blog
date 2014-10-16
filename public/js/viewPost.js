jQuery(document).ready(function($){
 
    $('#comment-form').on('submit', function(){ 
				 
       // ajax post method to pass form data to the 
       var  theUrl = $(this).prop('action'),
            theData = $(this).serialize(),
            contentType = 'json';
        $.post(theUrl, theData,
            function(data){
                //response after the process. 
                console.log(data);
                if(data.status==="success"){
                    var theComment = $('<div>',{ class: "comment", text: data.comment});
                    var theName = $('<span>',{class:"name", text: data.name+": "});
                    theComment.prepend(theName);
                    $('#comments').append(theComment);
                    $('#comment-form #comment').val('').focus();
                }
                else{
                    alert(data.error);
                }
            },
            contentType
        ); 
       
        return false;
    }); 
});