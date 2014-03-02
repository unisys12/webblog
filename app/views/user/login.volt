{% extends "layouts/main.volt" %}

{% block title %} Create {% endblock %}

{% block content %}
<div class="large-8 large-centered small-centered columns">
	{{ form('user/authAttempt') }}

	<label for="username">Username: </label>
	{{ text_field('username') }}

	<label for="password">Password: </label>
	{{ password_field('password') }}

	{{ submit_button('Log In') }}

	{{ end_form() }}

	<p><?php $this->flashSession->output() ?></p>
</div>
{% endblock %}
