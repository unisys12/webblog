@extends('layouts.post')

@section('title')
{{ $post->post_title }}
@stop

@section('content')

<main class="post">
	<header class="post_header">
		<h3 class="post_title">{{ $post->post_title }}</h3>
		<span class="post_details"><small>{{ $post->post_author }} - {{ $post->created_at }}</small></span>
		<h5 class="post_desc">{{ $post->post_desc }}</h5>
	</header>
	<article class="post_content">
		{{ $content }}
	</article>
	<section class="post_details">
		<small> {{ $post->post_tags }} </small>
	</section>
</main>

@stop

@section('scriptblock')
<script src="{{ url('js/prism.js') }}"></script>
@stop
