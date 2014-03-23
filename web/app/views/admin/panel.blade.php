@extends('layouts.panel')

@section('title')

Unisys12 Admin Panel

@stop


@section('content')

<header>
	<h2>Posts List</h2>
</header>

<section class="post_list">

	<div class="post-id">
		<h6>Post ID</h6>
		@foreach($posts as $item)
		<p>{{ $item->id }}</p>
		@endforeach
	</div>
	<div class="post-title">
		<h6>Post Title</h6>
		@foreach($posts as $item)
		<p>{{ substr($item->post_title, 0, 10) }}</p>
		@endforeach
	</div>
	<div class="post-desc">
		<h6>Post Description</h6>
		@foreach($posts as $item)
		<p>{{ substr($item->post_desc, 0, 10) }}</p>
		@endforeach
	</div>
	<div class="post-content">
		<h6>Post Content</h6>
		@foreach($posts as $item)
		<p>{{ substr($item->post_content, 0, 25) }}</p>
		@endforeach
	</div>
	<div class="post-author">
		<h6>Post Author</h6>
		@foreach($posts as $item)
		<p>{{ $item->post_author }}</p>
		@endforeach
	</div>
	<div class="post-tags">
		<h6>Post Tags</h6>
		@foreach($posts as $item)
		<p>{{ $item->post_tags }}</p>
		@endforeach
	</div>
	<div class="post-created">
		<h6>Post Created</h6>
		@foreach($posts as $item)
		<p>{{ $item->created_at }}</p>
		@endforeach
	</div>
	<div class="post-updated">
		<h6>Post Updated</h6>
		@foreach($posts as $item)
		<p>{{ $item->created_at }}</p>
		@endforeach
	</div>
	<div class="post-edit">
		<h6>Edit Post</h6>
		<?php $num = count($posts) ?>
		@for($i = 0; $i < $num; $i++)
			<p>
				<a href="{{ url('/posts') }}{{ '/' .$item->id. '/edit' }}" title="">Edit</a>
			</p>
		@endfor
	</div>

</section>

@stop
