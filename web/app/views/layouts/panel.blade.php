<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Admin Panel - @yield('title') </title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">

		<section class="topbar">
			<!-- Admin / Backend Navigation -->
			<nav>
				<ul>
					<li> {{ link_to('', 'Blog Home') }} </li>
					<li> {{ link_to('portfolio', 'Portfolio') }} </li>
					<li> {{ link_to('upto', 'What Am I Up To?') }} </li>
					<li> {{ link_to('about', 'About Me') }} </li>
				</ul>
			</nav>
		</section>

		<main class="panel">
			<!-- Main workarea -->
			@yield('content')
		</main>

		<aside class="menu">
			<!-- Work Area Options and Navigation -->
			<nav class="aside">
				<ul>
					<li><a href="#">This is</a></li>
					<li><a href="#">a menu for</a></li>
					<li><a href="#">the admin panel</a></li>
				</ul>
				<hr>
				<ul>
					<li><a href="#">This is</a></li>
					<li><a href="#">a menu for</a></li>
					<li><a href="#">the admin panel</a></li>
				</ul>
			</nav>
		</aside>

		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
	<!-- Any Scripts that might need to be load will go here! -->
</body>
</html>
