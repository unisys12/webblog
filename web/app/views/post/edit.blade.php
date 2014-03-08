@extends('layouts.panel');

@section('title')
Edit Post
@stop

@section('content')
{{ Form::model($post, array('method' => 'put','route' => array('posts.update', $post->id))) }}
<ul>
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
