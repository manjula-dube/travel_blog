@extends('layouts.default')

@section('content')
{{HTML::script('laravel-master/public/js/test.js')}}
	{{ Form :: open(['route' =>'users.store']	)}}

		<div>
	    	{{ Form::label('username','Username:')}}
	    	{{ Form::text('username')}}
	    	{{ $errors->first('username') }}
	    </div>

	    <div>
	    	{{ Form::label('password','Password:')}}
	    	{{ Form::password('password')}}
	    	{{ $errors->first('password') }}
	    </div>

	    <div>
    		{{ Form::submit('Signup') }}
    	</div>

	{{ Form :: close()}}
@stop