{% include "partials/head.volt" %}
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
			<div class="moto"><p>My adventures, trials, tribulations of learning web development as a hobby! I mean... who does that?</p></div>
			<p><?php $this->flashSession->output() ?></p>
		</div>
		<hr>
		{% block content %}{% endblock %}
		{% include "partials/footer.volt" %}
	</div>
{% block scriptblock %}{% endblock %}
</body>
</html>
