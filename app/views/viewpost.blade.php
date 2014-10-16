@extends('layouts.default')

@section('content')

	<div class="post">
		<h3>{{$post->title}}</h3>
		<div>
			{{BBCode::parse($post->body)}}
		</div>
	</div>
	<hr>
	<br/>

	<div>Comments:</div>

	<div id="comments">
		@foreach ($comments as $comment)
			<div class="comment">
				<span class="name">{{$comment->name}}: </span>{{$comment->comment}}
			</div>
		@endforeach
	</div>

	{{ Form :: open(['route' =>'comments.store', 'id' => 'comment-form']	)}}

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

@section('head')

	{{HTML::style('/css/comments.css')}}

@stop