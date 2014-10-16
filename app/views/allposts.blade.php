@extends('layouts.default')

@section('content')

		<div id="allBlogs">
			@foreach ($posts as $post)
				<div class="post">
					<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
					<div>{{$post->body}}</div>
				</div>
			@endforeach

	    </div>	    
	   
@stop