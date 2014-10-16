@extends('layouts.default')

@section('content')
	{{ Form :: open(['route' =>'posts.store']	)}}

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