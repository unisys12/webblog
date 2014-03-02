<div class="large-8 large-centered columns">
	<header class="panel">
		<h1>List All Posts</h1>
	</header>
</div>

<div class="row">
	<nav class="large-8 large-centered columns">
		<ul class="inline-list">
			<li>{{ link_to('post/create', 'New Post') }}</li>
		</ul>
		<p><?php $this->flashSession->output() ?></p>
	</nav>
</div>

<div class="row">
	<main class="large-12 columns">
		{% for post in posts %}
			<h3>{{ post.post_title }}</h3>
			<small>{{ post.post_author }} - {{ post.created_at }}</small><br>
			<h5>{{ post.post_desc }}</h5>
			<div class="panel callout">
				<p class="justified">{{ post.post_content }}</p>
			</div>
		{% endfor %}
	</main>
</div>
