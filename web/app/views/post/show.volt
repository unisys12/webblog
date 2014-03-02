{% extends "layouts/main.volt" %}

{% block title %} Unisys12 - {{ post.post_title }} {% endblock %}

{% block content %}
<main class="posts">
	<header class="post_header">
		<h3 class="post_title">{{ post.post_title }}</h3>
		<span class="post_details"><small>{{ post.post_author }} - {{ post.created_at }}</small></span>
		<h5 class="post_desc">{{ post.post_desc }}</h5>
	</header>

	<article class="post_content">
		<?php echo Parsedown::instance()->parse($post->post_content); ?>
	</article>
</main>
{% endblock %}

{% block scriptblock %}
<script src="js/prism.js"></script>
{% endblock %}
