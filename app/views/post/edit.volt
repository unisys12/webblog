{% extends "layouts/main.volt" %}

{% block title %} Edit {% endblock %}

{% block content %}
<div class="large 8 large-centered columns">
	<main class="panel">
		{{ form('post/update') }}

		{{ hidden_field('created_at') }}
		{{ hidden_field('updated_at') }}

		<label for="post_title">Post Title</label>
		{{ text_field('post_title') }}

		<label for="post_desc">Post Description</label>
		{{ text_field('post_desc') }}

		<label for="post_content">Post Content</label>
		{{ text_area('post_content') }}

		{{ submit_button('Edit Current Post') }}
		{{ end_form() }}

		{% if error is defined %}
			{% for errors in error %}
				{{ error }}
			{% endfor %}
		{% endif %}
	</main>
</div>
{% endblock %}
