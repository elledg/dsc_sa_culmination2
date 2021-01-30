@extends ('layout')

@section ('content')

<article class="post">
<div class="wrapgriditem">
	<header class="post-header">
	<h2 class="post-title"> {{ $post->title }} </h2>
	</header>

	<section class="post-excerpt">
	<p> {{ $post->body}} </p>
	</section>
	
	<footer class="post-meta">
	<img class="author-thumb" src="assets/img/gravatar.jpg" alt="David" nopin="nopin"/>
	<a href="author.html">David</a>
	<time class="post-date" datetime="2016-12-18">18 December 2016</time>
	</footer>
</div>
</article>

@endsection ('content')