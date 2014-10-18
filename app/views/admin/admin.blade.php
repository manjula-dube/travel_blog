@extends('layouts.default')
@section('content')


	{{ Form :: open(['route' =>'posts.store'])}}

		<div>
	    	{{ Form::text('title','',array('placeholder'=>'Title', 'id'=>'title'))}}
	    	{{ $errors->first('title') }}
	    </div>
	    <div>
	    	{{ Form::textarea('body')}}
	    	{{ $errors->first('body') }}
	    </div>

	    <div>
    		{{ Form::submit('Add New Post') }}
    	</div>

	{{ Form :: close()}}
@stop

@section('head')
	{{HTML::style('http://cdn.wysibb.com/css/default/wbbtheme.css')}}
	{{HTML::style('/css/admin.css')}}
@stop

@section('footer')
	<!-- Library included from http://www.wysibb.com/docs/ -->
	{{HTML::script('http://cdn.wysibb.com/js/jquery.wysibb.min.js')}}
	{{HTML::script('/js/admin.js')}}
@stop