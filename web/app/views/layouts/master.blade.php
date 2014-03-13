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
					<li> {{ link_to('upto', 'What Am I Up To?') }} </li>
					<li> {{ link_to('about', 'About Me') }} </li>
				</ul>
			</nav>
			<div class="moto"><p>My adventures, trials &amp; tribulations of learning web development as a hobby! I mean... who does that?</p></div>
		</div>
		<hr>
		@yield('content')
		<aside class="adds">
			<div class="search">
				<form action="post">
					<input type="search" placeholder="Doesn't Work!">
					<button class="button">Search</button>
				</form>
			</div>
			<div class="contact">
				<h4>Contact Me</h4>
				<ul>
					<li>
						<a href="mailto:unisys12@gmail.com">
							<object data="{{url('css/icons/mail.svg')}}" type="image/svg+xml" class="mail"></object>
						</a>
					</li>
					<li>
						<a href="https://github.com/unisys12">
							<object data="{{url('css/icons/git.svg')}}" type="image/svg+xml" class="git"></object>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/unisys12" class="svg_twitter">
							<object data="{{url('css/icons/twitter.svg')}}" type="image/svg+xml" class="twitter"></object>
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/u/0/105355777056677229541/">
							<object data="{{url('css/icons/googleplus.svg')}}" type="image/svg+xml" class="google"></object>
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48848729-1', 'blog-unisys12.rhcloud.com');
	  ga('send', 'pageview');

	</script>
</body>
</html>
