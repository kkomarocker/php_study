@extends('components.home') 
@section('content')
<div class="col-md-8 blog-main">
  @foreach ($posts as $article)
  @include('posts.article') @endforeach

  <!-- /.blog-post -->

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>
</div>
<!-- /.blog-main -->
@endsection
