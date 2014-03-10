@extends('layouts.master')

@section('title')
Blog
@stop

@section('content')

{{ Form::open(array('url' => '/login')) }}
<ul>
<li>{{ Form::label('username', 'Username:') }}</li>
<li>{{ Form::text('username') }}</li>
{{ $errors->first('username', '<span class="alert"> :message </span>') }}
<li>{{ Form::label('password', 'Password:') }}</li>
<li>{{ Form::password('password') }}</li>
{{ $errors->first('password', '<span class="alert"> :message </span>') }}
<li>{{ Form::submit('Login') }}</li>
</ul>
{{ Form::close() }}

@stop
