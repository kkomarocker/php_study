@extends('components.home') 
@section('content')
<div class="col-md-8 blog-main">
  <h1>Publish a post</h1>
  <hr>
  <form method="POST" action="/posts">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" autofocus>
    </div>
    <div class="form-group">
      <label for="body">Content</label>
      <textarea type="body" class="form-control" id="body" name="body"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
  @include('posts.errors')
  </form>

</div>
@endsection
