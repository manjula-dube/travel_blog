<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
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
	    			<a href="/login">Logout</a>	| <a href="/posts/create">Add New Post</a>	
				@endunless
			</span>
		</header>
		<section id="container">
		@yield('content')
		{{HTML::script('/js/alienScript/jquery-1.11.1.min.js')}}
		</section>

		<!-- Can use the following section to include view specific javascripts. -->
		@yield('footer')
	</body>
</html>