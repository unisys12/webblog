{% extends "layouts/main.volt" %}

{% block title %} Create {% endblock %}

{% block content %}
<div class="large-8 large-centered columns">
	{{ form('user/save', 'method' : 'post') }}

	<label for="name">Name: </label>
	{{ text_field('name') }}

	<label for="email">Email: </label>
	{{ email_field('email') }}

	<label for="username">Username: </label>
	{{ text_field('username') }}

	<label for="password">Password: </label>
	{{ password_field('password') }}

	<label for="password_confirm">Password: </label>
	{{ password_field('password_confirm') }}

	{{ submit_button('Submit New User') }}

	{{ end_form() }}

	<p><?php $this->flashSession->output() ?></p>
</div>
{% endblock %}
