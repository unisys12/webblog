@extends('layouts.master')

@section('title')
Blog
@stop

@section('content')

<main class="posts">
	@foreach ($posts as $list)
	<header class="post_header">
		<h3 class="post_title"><a href="">{{ $list.post_title }}</a></h3>
		<span class="post_details"><small>{{ $list.post_author }} - {{ $list.created_at }}</small></span>
		<h5 class="post_desc">{{ $list.post_desc }}</h5>
	</header>
	<article class="post_content">
		{{$$list.post_content}}
	</article>
	@endforeach
</main>

@stop
