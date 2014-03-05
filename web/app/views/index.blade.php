@extends('layouts.master')

@section('title')
Blog
@stop

@section('content')

<main class="posts">
	@foreach ($posts as $post)
	<header class="post_header">
		<h3 class="post_title"><a href="">{{ $post->post_title }}</a></h3>
		<span class="post_details"><small>{{ $post->post_author }} - {{ $post->created_at }}</small></span>
		<h5 class="post_desc">{{ $post->post_desc }}</h5>
	</header>
	<article class="post_content">
		{{ $post->post_content }}
	</article>
	@endforeach
</main>

@stop
