@extends('layouts.default')

@section('content')

	<div class="post">
		<h3>{{$post->title}}</h3>
		<div>
			{{$post->body}}
		</div>
	</div>
	<hr>
	<br/>

	{{ Form :: open(['route' =>'comments.store', 'id' => 'form-comment']	)}}

		<div>
			{{Form::hidden('postid',"$post->id")}}
	    	{{ Form::label('name','Name:')}}<br/>
	    	{{ Form::text('name')}}
	    </div>

	    <div>
	    	{{ Form::label('comment','Comments:')}}<br/>
	    	{{ Form::textarea('comment')}}
	    </div>

	    <div>
    		{{ Form::submit('Add Comment') }}
    	</div>

	{{ Form :: close()}}
	   
@stop

@section('footer')

	{{HTML::script('/js/viewPost.js')}}

@stop