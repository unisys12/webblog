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
						<a href="mailto:unisys12@gmail.com" class="mail">
							<svg version="1.1" width="32" height="32" viewBox="0 0 32 32">
								<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.865-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z" fill="#222222" class="svg_mail" />
							</svg>
						</a>
					</li>
					<li>
						<a href="https://github.com/unisys12">
							<svg version="1.1" width="32" height="32" viewBox="0 0 32 32">
								<path d="M0 17.388c0 1.45 0.136 2.762 0.407 3.935 0.271 1.174 0.647 2.193 1.127 3.059 0.48 0.866 1.090 1.627 1.831 2.285 0.741 0.657 1.544 1.195 2.41 1.612 0.866 0.417 1.854 0.756 2.965 1.017 1.111 0.261 2.245 0.443 3.403 0.548 1.158 0.104 2.431 0.156 3.818 0.156 1.398 0 2.676-0.052 3.834-0.156 1.158-0.104 2.295-0.287 3.411-0.548 1.116-0.261 2.11-0.6 2.981-1.017 0.871-0.417 1.68-0.954 2.425-1.612 0.746-0.657 1.361-1.419 1.846-2.285 0.485-0.866 0.863-1.886 1.134-3.059 0.271-1.174 0.407-2.486 0.407-3.935 0-2.587-0.866-4.825-2.597-6.713 0.094-0.25 0.18-0.535 0.258-0.853 0.078-0.318 0.151-0.772 0.219-1.361 0.068-0.589 0.042-1.27-0.078-2.042-0.12-0.772-0.342-1.56-0.665-2.363l-0.235-0.047c-0.167-0.031-0.441-0.023-0.822 0.024s-0.824 0.141-1.33 0.282c-0.506 0.141-1.158 0.412-1.956 0.814-0.798 0.402-1.64 0.905-2.527 1.51-1.523-0.417-3.615-0.626-6.275-0.626-2.65 0-4.736 0.209-6.259 0.626-0.887-0.605-1.734-1.108-2.543-1.51-0.808-0.402-1.453-0.673-1.933-0.814-0.48-0.141-0.928-0.232-1.346-0.274-0.417-0.042-0.681-0.055-0.79-0.039-0.11 0.016-0.196 0.034-0.258 0.055-0.323 0.803-0.545 1.591-0.665 2.363-0.12 0.772-0.146 1.453-0.078 2.042 0.068 0.589 0.141 1.043 0.219 1.361 0.078 0.318 0.164 0.602 0.258 0.853-1.732 1.888-2.598 4.126-2.598 6.713zM3.928 21.315c0-1.502 0.683-2.879 2.050-4.131 0.407-0.376 0.881-0.66 1.424-0.853 0.542-0.193 1.155-0.302 1.839-0.329 0.683-0.026 1.338-0.021 1.964 0.016 0.626 0.037 1.398 0.086 2.316 0.149 0.918 0.063 1.711 0.094 2.379 0.094 0.668 0 1.46-0.031 2.378-0.094 0.918-0.063 1.69-0.112 2.316-0.149 0.626-0.037 1.28-0.042 1.964-0.016 0.683 0.026 1.296 0.136 1.839 0.329 0.542 0.193 1.017 0.477 1.424 0.853 1.367 1.231 2.050 2.608 2.050 4.131 0 0.897-0.112 1.693-0.337 2.386-0.224 0.694-0.511 1.275-0.861 1.745-0.349 0.469-0.834 0.868-1.455 1.197-0.621 0.329-1.226 0.582-1.815 0.759-0.589 0.177-1.346 0.316-2.269 0.415-0.923 0.099-1.747 0.159-2.472 0.18-0.725 0.021-1.646 0.031-2.762 0.031-1.116 0-2.037-0.010-2.762-0.031-0.725-0.021-1.549-0.081-2.472-0.18-0.923-0.099-1.68-0.237-2.269-0.415-0.589-0.177-1.194-0.43-1.815-0.759-0.621-0.329-1.106-0.728-1.455-1.197-0.349-0.469-0.636-1.051-0.861-1.745-0.224-0.694-0.336-1.489-0.336-2.386zM20 21c0-1.657 0.895-3 2-3s2 1.343 2 3c0 1.657-0.895 3-2 3-1.105 0-2-1.343-2-3zM8 21c0-1.657 0.895-3 2-3s2 1.343 2 3c0 1.657-0.895 3-2 3-1.105 0-2-1.343-2-3z" fill="#222222" class="svg_git"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/unisys12">
							<svg version="1.1" width="32" height="32" viewBox="0 0 32 32">
								<path d="M32 6.076c-1.177 0.522-2.443 0.875-3.771 1.034 1.355-0.813 2.396-2.099 2.887-3.632-1.269 0.752-2.674 1.299-4.169 1.593-1.198-1.276-2.904-2.073-4.792-2.073-3.626 0-6.565 2.939-6.565 6.565 0 0.515 0.058 1.016 0.17 1.496-5.456-0.274-10.294-2.888-13.532-6.86-0.565 0.97-0.889 2.097-0.889 3.301 0 2.278 1.159 4.287 2.921 5.465-1.076-0.034-2.088-0.329-2.974-0.821-0.001 0.027-0.001 0.055-0.001 0.083 0 3.181 2.263 5.834 5.266 6.437-0.551 0.15-1.131 0.23-1.73 0.23-0.423 0-0.834-0.041-1.235-0.118 0.835 2.608 3.26 4.506 6.133 4.559-2.247 1.761-5.078 2.81-8.154 2.81-0.53 0-1.052-0.031-1.566-0.092 2.905 1.863 6.356 2.95 10.064 2.95 12.076 0 18.679-10.004 18.679-18.68 0-0.285-0.006-0.568-0.019-0.849 1.283-0.926 2.396-2.082 3.276-3.398z" fill="#222222" class="svg_twitter"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/u/0/105355777056677229541/">
							<svg version="1.1" width="32" height="32" viewBox="0 0 32 32">
								<path d="M17.471 2c0 0-6.28 0-8.373 0-3.754 0-7.287 2.844-7.287 6.138 0 3.366 2.559 6.083 6.378 6.083 0.266 0 0.524-0.005 0.776-0.024-0.248 0.475-0.425 1.009-0.425 1.564 0 0.936 0.503 1.694 1.14 2.313-0.481 0-0.945 0.014-1.452 0.014-4.649-0-8.228 2.961-8.228 6.032 0 3.024 3.923 4.916 8.573 4.916 5.301 0 8.228-3.008 8.228-6.032 0-2.425-0.715-3.877-2.928-5.442-0.757-0.536-2.204-1.839-2.204-2.604 0-0.897 0.256-1.34 1.607-2.395 1.385-1.082 2.365-2.603 2.365-4.372 0-2.106-0.938-4.159-2.699-4.837h2.655l1.874-1.355zM14.546 22.483c0.066 0.28 0.103 0.569 0.103 0.863 0 2.444-1.575 4.353-6.093 4.353-3.214 0-5.535-2.035-5.535-4.478 0-2.395 2.879-4.389 6.093-4.354 0.75 0.008 1.449 0.129 2.083 0.334 1.745 1.213 2.996 1.899 3.349 3.281zM9.401 13.368c-2.157-0.065-4.207-2.413-4.58-5.246-0.372-2.833 1.074-5.001 3.231-4.937 2.157 0.065 4.207 2.338 4.58 5.171 0.372 2.833-1.075 5.077-3.231 5.012zM26 8v-6h-2v6h-6v2h6v6h2v-6h6v-2z" fill="#222222" class="svg_google"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<footer class="footer">
			<p><small>&copy; 2014 - Phillip Jackson</small></p>
		</footer>
	</div>
	<!-- {% block scriptblock %}{% endblock %} -->
</body>
</html>
