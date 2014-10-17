<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		{{HTML::style('css/common.css')}}

		<!-- Can use the following section to include view specific stylesheets. -->
		@yield('head')
	</head>

	<body>
		<header class="clearfix">
			<h1><a href="/">Manjula's Travel Blog!</a></h1>
			<span class="links">
				@unless (Auth::check())
	    			<a href="/login">Login</a>
	    		@else
	    			<a href="/logout">Logout</a>	| <a href="/posts/create">Add New Post</a>	
				@endunless
			</span>
		</header>
		<section id="container">
		@yield('content')
		{{HTML::script('/js/alienScript/jquery-1.11.1.min.js')}}
		{{HTML::script('/js/common.js')}}
		</section>

		<!-- Can use the following section to include view specific javascripts. -->
		@yield('footer')
	</body>
</html>