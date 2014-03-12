<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Unisys12 - @yield('title')</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48848729-1', 'blog-unisys12.rhcloud.com');
  ga('send', 'pageview');

</script>
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
		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
	@yield('scriptblock')
</body>
</html>
