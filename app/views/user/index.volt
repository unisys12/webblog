{% extends "layouts/main.volt" %}

{% block title %} Create {% endblock %}

{% block content %}
<h1>User Profile</h1>
<p><?php $this->flashSession->output() ?></p>
{% endblock %}
