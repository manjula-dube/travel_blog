@extends('layouts.default')

@section('content')
		{{HTML::script('laravel-master/public/js/getAllPosts.js')}}

		<div>
	    	{{ Form::label('Tittle','Tittle:')}}
	    	{{ Form::text('title')}}
	    	{{ $errors->first('title') }}
	    </div>

	    <div>
	    	{{ Form::label('Post','Add Post')}}
	    	{{ Form::textarea('body')}}
	    	{{ $errors->first('body') }}
	    </div>

	    <div>
    		{{ Form::submit('Add New Post') }}
    	</div>

	{{ Form :: close()}}
@stop