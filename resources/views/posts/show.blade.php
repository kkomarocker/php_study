@extends('components.home') 
@section('content')
<div class="col-md-8 blog-main">
  <h1>{{ $article -> title }}</h1>
  <p>{{ $article -> created_at -> toFormattedDateString() }}</p>

  {{ $article -> body }}
  <hr>
  <div class="comments">
    @foreach ($article -> comments as $comment)

    <li class="list-group-item">
      <strong>
            {{ $comment -> created_at -> diffForHumans() }}:
      </strong> {{ $comment -> body }}
    </li>
    @endforeach
  </div>

  <hr>

  <div class="card">
    <div class="card-block">
      <form action="POST" action="/posts/{{ $article -> id }}/comments">
        @csrf
        <div class="form-group">
          <textarea name="body" placeholder="Your comment here" class="form-control" cols="30"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection
