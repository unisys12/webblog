<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<title>Unisys12 - @yield('title')</title>
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
					<li> {{ link_to('about', 'About Me') }} </li>
				</ul>
			</nav>
			<div class="moto"><p>My adventures, trials &amp; tribulations of learning web development as a hobby! I mean... who does that?</p></div>
		</div>
		<hr>
		@yield('content')
		<aside class="adds">
			<div class="search">
				<form action="{{ route('search') }}" method="post">
					<input type="search" name="search" placeholder="Search by Post Tag!">
					<button class="button">Search</button>
				</form>
			</div>
			<div class="contact">
				<h4>Contact Me</h4>
				<ul>
					<li>
						<a href="mailto:unisys12@gmail.com">
							<?xml version="1.0" encoding="utf-8"?>
							<!-- Generated by IcoMoon.io -->
							<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
							<g>
							</g>
								<path d="M26.667 0h-21.333c-2.934 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334h21.333c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM5.707 27.707l-2.414-2.414 8-8 0.914 0.914-6.5 9.5zM4.793 6.207l0.914-0.914 10.293 8.293 10.293-8.293 0.914 0.914-11.207 13.207-11.207-13.207zM26.293 27.707l-6.5-9.5 0.914-0.914 8 8-2.414 2.414z" fill="#000000" class="mail"/>
							</svg>
							<!-- <object data="{{url('css/icons/svg/mail.svg')}}" type="image/svg+xml" class="mail"></object> -->
						</a>
					</li>
					<li>
						<a href="https://github.com/unisys12">
							<?xml version="1.0" encoding="utf-8"?>
								<!-- Generated by IcoMoon.io -->
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
								<g>
								</g>
									<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM25.502 25.502c-1.235 1.235-2.672 2.204-4.272 2.881-0.406 0.172-0.819 0.323-1.238 0.453v-2.398c0-1.26-0.432-2.188-1.297-2.781 0.542-0.052 1.039-0.125 1.492-0.219s0.932-0.229 1.438-0.406 0.958-0.388 1.359-0.633 0.786-0.563 1.156-0.953 0.68-0.833 0.93-1.328 0.448-1.089 0.594-1.781 0.219-1.456 0.219-2.289c0-1.615-0.526-2.99-1.578-4.125 0.479-1.25 0.427-2.609-0.156-4.078l-0.391-0.047c-0.271-0.031-0.758 0.083-1.461 0.344s-1.492 0.688-2.367 1.281c-1.24-0.344-2.526-0.516-3.859-0.516-1.344 0-2.625 0.172-3.844 0.516-0.552-0.375-1.075-0.685-1.57-0.93-0.495-0.245-0.891-0.411-1.188-0.5s-0.573-0.143-0.828-0.164-0.419-0.026-0.492-0.016-0.125 0.021-0.156 0.031c-0.583 1.479-0.635 2.839-0.156 4.078-1.052 1.135-1.578 2.51-1.578 4.125 0 0.833 0.073 1.596 0.219 2.289s0.344 1.286 0.594 1.781 0.56 0.938 0.93 1.328 0.755 0.708 1.156 0.953 0.854 0.456 1.359 0.633 0.984 0.313 1.438 0.406 0.95 0.167 1.492 0.219c-0.854 0.583-1.281 1.51-1.281 2.781v2.445c-0.472-0.14-0.937-0.306-1.394-0.5-1.6-0.677-3.037-1.646-4.272-2.881-1.235-1.235-2.204-2.672-2.881-4.272-0.7-1.655-1.055-3.414-1.055-5.23s0.355-3.575 1.055-5.23c0.677-1.6 1.646-3.037 2.881-4.272s2.672-2.204 4.272-2.881c1.655-0.7 3.415-1.055 5.23-1.055s3.575 0.355 5.23 1.055c1.6 0.677 3.037 1.646 4.272 2.881 1.235 1.235 2.204 2.672 2.881 4.272 0.7 1.655 1.055 3.415 1.055 5.23s-0.355 3.575-1.055 5.23c-0.677 1.6-1.646 3.037-2.881 4.272z" fill="#000000" class="github"/>
								</svg>
							<!-- <object data="{{url('css/icons/svg/github.svg')}}" type="image/svg+xml" class="git"></object> -->
						</a>
					</li>
					<li>
						<a href="https://twitter.com/unisys12" class="svg_twitter">
							<?xml version="1.0" encoding="utf-8"?>
								<!-- Generated by IcoMoon.io -->
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
								<g>
								</g>
									<path d="M26.667 0h-21.333c-2.934 0-5.334 2.4-5.334 5.334v21.332c0 2.936 2.4 5.334 5.334 5.334h21.333c2.934 0 5.333-2.398 5.333-5.334v-21.332c0-2.934-2.399-5.334-5.333-5.334zM26.189 10.682c0.010 0.229 0.015 0.46 0.015 0.692 0 7.069-5.288 15.221-14.958 15.221-2.969 0-5.732-0.886-8.059-2.404 0.411 0.050 0.83 0.075 1.254 0.075 2.463 0 4.73-0.855 6.529-2.29-2.3-0.043-4.242-1.59-4.911-3.715 0.321 0.063 0.65 0.096 0.989 0.096 0.479 0 0.944-0.066 1.385-0.188-2.405-0.492-4.217-2.654-4.217-5.245 0-0.023 0-0.045 0-0.067 0.709 0.401 1.519 0.641 2.381 0.669-1.411-0.959-2.339-2.597-2.339-4.453 0-0.98 0.259-1.899 0.712-2.689 2.593 3.237 6.467 5.366 10.836 5.589-0.090-0.392-0.136-0.8-0.136-1.219 0-2.954 2.354-5.349 5.257-5.349 1.512 0 2.879 0.65 3.838 1.689 1.198-0.24 2.323-0.685 3.338-1.298-0.393 1.249-1.226 2.298-2.311 2.96 1.063-0.129 2.077-0.417 3.019-0.842-0.705 1.073-1.596 2.015-2.623 2.769z" fill="#000000" class="twitter"/>
								</svg>
							<!-- <object data="{{url('css/icons/svg/twitter.svg')}}" type="image/svg+xml" class="twitter"></object> -->
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/u/0/105355777056677229541/">
							<?xml version="1.0" encoding="utf-8"?>
								<!-- Generated by IcoMoon.io -->
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
								<g>
								</g>
									<path d="M0.025 27.177c-0.008-0.079-0.014-0.158-0.018-0.238 0.004 0.080 0.011 0.159 0.018 0.238zM7.372 17.661c2.875 0.086 4.804-2.897 4.308-6.662-0.497-3.765-3.231-6.787-6.106-6.873-2.876-0.085-4.804 2.796-4.308 6.562 0.496 3.765 3.23 6.887 6.106 6.973zM32 8v-2.666c0-2.934-2.399-5.334-5.333-5.334h-21.333c-2.884 0-5.25 2.32-5.33 5.185 1.824-1.606 4.354-2.947 6.965-2.947 2.791 0 11.164 0 11.164 0l-2.498 2.113h-3.54c2.348 0.9 3.599 3.629 3.599 6.429 0 2.351-1.307 4.374-3.153 5.812-1.801 1.403-2.143 1.991-2.143 3.184 0 1.018 1.93 2.75 2.938 3.462 2.949 2.079 3.904 4.010 3.904 7.233 0 0.513-0.064 1.026-0.19 1.53h9.617c2.934 0 5.333-2.398 5.333-5.334v-16.666h-6v6h-2v-6h-6v-2h6v-6h2v6h6zM5.809 23.936c0.675 0 1.294-0.018 1.936-0.018-0.848-0.823-1.52-1.831-1.52-3.074 0-0.738 0.236-1.448 0.567-2.079-0.337 0.024-0.681 0.031-1.035 0.031-2.324 0-4.297-0.752-5.756-1.995v2.101l0 6.304c1.67-0.793 3.653-1.269 5.809-1.269zM0.107 27.727c-0.035-0.171-0.061-0.344-0.079-0.52 0.018 0.176 0.045 0.349 0.079 0.52zM14.233 29.776c-0.471-1.838-2.139-2.749-4.465-4.361-0.846-0.273-1.778-0.434-2.778-0.444-2.801-0.030-5.41 1.092-6.882 2.762 0.498 2.428 2.657 4.267 5.226 4.267h8.951c0.057-0.348 0.084-0.707 0.084-1.076 0-0.392-0.048-0.775-0.137-1.148z" fill="#000000" class="google"/>
								</svg>
							<!-- <object data="{{url('css/icons/svg/googleplus.svg')}}" type="image/svg+xml" class="google"></object> -->
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
</body>
</html>
