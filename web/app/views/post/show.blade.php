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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48848729-1', 'blog-unisys12.rhcloud.com');
  ga('send', 'pageview');

</script>
@stop
