Routers('blogs/show', 'GET', generateBlogs);


function Routers(url, type, callBackFun, param,datatype,callBackData){

	if(type) {
		type = "GET";
	}

	$.ajax({
	type: type,
	url: url,
	data: param,
	datatype:datatype,
	success: function(data){
		if(callBackData) {
			callBackFun(data);
		} else {
			callBackFun(data, callBackData);
		}
	},
	error: function(error) {
		console.log(error);
	}
})
}

function generateBlogs(data) {
		for(var i=0; i<data.length; i++) {
			$('#allBlogs').append('<div style="boder:1px">'+data[i].tittle+'</div></br></br><div style="boder:1px">'+data[i].body+'</div>')
			$('#allBlogs').append('<div id="comments">	<textarea name="comment" id='+data[i].postid+'></textarea><button type = "button" onClick="addComment(this)">Submit</button></div>');
		}
}

function addComment(element) {
	var params = "{'postid':"+$(element).id+", 'comment':"+$(element).parent().find('textarea').val()+"}"
	Routers('comments/create','POST', onSuccessAddComment, params ,"JSON", element)
}

function onSuccessAddComment(data, callBackData) {
	$(callBackData).attr('dissabled','dissabled');
}