@extends('layouts.default')

@section('content')
	{{ Form :: open(['route' =>'sessions.store']	)}}
		
		<div class="loginFormContainer">
			<div class="loginBoxContainer">
		    	{{ Form::label('username','Username:',array('class' => 'lablesLogin'))}}
		    	{{ Form::text('username',null,array('class' => 'inputBoxLogin'))}}
		    </div>

		    <div class="loginBoxContainer">
		    	{{ Form::label('password','Password:',array('class' => 'lablesLogin'))}}
		    	{{ Form::password('password',array('class' => 'inputBoxLogin'))}}
		    </div>
        @if($response)
			<div class="validateLogin">{{$response}}</div>
		@endif
		    <div class="loginButtonContainer">
	    		{{ Form::submit('Login',array('class' => 'loginbutton')) }}
	    	</div>
		</div>
	{{ Form :: close()}}
@stop