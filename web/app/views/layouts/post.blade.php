<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Unisys12 - @yield('title')</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">
		<div class="topbar">
			<h1>Unisys12's Blog</h1>
			<nav>
				<ul>
					<li> {{ link_to('', 'Blog Home') }} </li>
					<li> {{ link_to('portfolio', 'Portfolio') }} </li>
					<li> {{ link_to('about', 'About Me') }} </li>
				</ul>
			</nav>
			<div class="moto"><p>My adventures, trials &amp; tribulations of learning web development as a hobby! I mean... who does that?</p></div>
		</div>
		<hr>
		@yield('content')
		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
	@yield('scriptblock')
</body>
</html>
