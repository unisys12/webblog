{% extends "layouts/main.volt" %}

{% block title %} Create {% endblock %}

{% block content %}
<div class="large 8 large-centered columns">
	<main class="panel">
		{{ form('post/save') }}

		<label for="post_title">Post Title</label>
		{{ text_field('post_title') }}

		<label for="post_desc">Post Description</label>
		{{ text_field('post_desc') }}

		<label for="post_content">Post Content</label>
		{{ text_area('post_content') }}

		{{ submit_button('Submit New Post') }}
		{{ end_form() }}

	</main>
</div>
{% endblock %}
