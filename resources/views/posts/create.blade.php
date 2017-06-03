@extends('partials.master')
@section('content')
@include('errors')
  <h1>create new post</h1>

  <form method="post" action="/posts" >
    {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="title" name="title">
  </div>
  <div class="form-group">
    <label for="Body">Body</label>
    <textarea class="form-control" id="Body" rows="3" name="body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
@endsection
