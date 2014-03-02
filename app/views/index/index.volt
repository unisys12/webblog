{% extends "layouts/main.volt" %}

{% block title %}<title> Unisys12 - Blog Home </title>{% endblock %}

{% block content %}
<main class="posts">
	{% for post in posts %}
	<header class="post_header">
		<h3 class="post_title"><a href="{{ url('post/show/') }}{{ post.post_title}}">{{ post.post_title }}</a></h3>
		<span class="post_details"><small>{{ post.post_author }} - {{ post.created_at }}</small></span>
		<h5 class="post_desc">{{ post.post_desc }}</h5>
	</header>
	<article class="post_content">
		<?php echo Parsedown::instance()->parse($post->post_content); ?>
	</article>
	{% endfor %}
</main>
{% endblock %}
