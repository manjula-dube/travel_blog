@extends('layouts.default')

@section('content')

<!-- It is used to show all the blog post on the home page-->
		<div id="allBlogs">
			@foreach ($posts as $post)
				<div class="post">
					<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
					<div>{{BBCode::parse($post->body)}}</div>
				</div>
			@endforeach

	    </div>	    
	   
@stop