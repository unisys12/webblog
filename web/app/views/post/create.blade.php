@extends('layouts.panel');

@section('title')
New Post
@stop

@section('content')
{{ Form::open(array('route' => 'posts.store')) }}
<ul class="post_form">
<li>{{ Form::label('post_title', 'Post Title') }}</li>
<li>{{ Form::text('post_title') }}</li>

<li>{{ Form::label('post_desc', 'Post Description') }}</li>
<li>{{ Form::text('post_desc') }}</li>

<li>{{ Form::label('post_tags', 'Tags') }}</li>
<li>{{ Form::text('post_tags') }}</li>

<li>{{ Form::label('post_content', 'Content') }}</li>
<li>{{ Form::textarea('post_content') }}</li>

<li>{{ Form::submit() }}</li>
</ul>

{{ Form::close() }}
@stop
