@extends('layout')

@section('content')
    
<main id="content" class="content" role="main">
    <div class="wraps">
        <img src="assets/img/shadow.png" class="wrapshadow">
        <div class="grid">
            @foreach ($posts as $post)
            <div class="grid-item">
                <article class="post">
                <div class="wrapgriditem">
                    <header class="post-header">
                    <h2 class="post-title"> 
                        <a href="/posts/{{ post->id }}">
                        {{ $post->title }} 
                    </h2>
                    </header>
                    
                    <footer class="post-meta">
                    <img class="author-thumb" src="assets/img/gravatar.jpg" alt="David" nopin="nopin"/>
                    <a href="author.html">David</a>
                    <time class="post-date" datetime="2016-12-18">18 December 2016</time>
                    </footer>
                </div>
                </article>
            </div>
            @endforeach
            
        </div>
        <nav class="pagination" role="navigation">
        <span class="page-number">Page 1 of 2</span>
        <a class="older-posts" href="page2.html">Older Posts &rarr;</a>
        </nav>
    </div>
    </main>

@endsection

