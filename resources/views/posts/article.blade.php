<div class="blog-post">
  <a href="/posts/{{ $article -> id }}">
    <h2 class="blog-post-title">{{ $article -> title }}</h2>
  </a>
  <p class="blog-post-meta">{{ $article -> created_at -> toFormattedDateString() }}
  </p>
  {{ $article -> body }}
</div>
