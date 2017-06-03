@extends('partials.master')
  @section('content')
    <h1> {{$post->title}}</h1>
    @if(count($post->tags))
      <ul>
        @foreach($post->tags as $tag)
          <li>
            <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
          </li>
        @endforeach
      </ul>
    @endif  
    <h5>{{$post->user->name}}&nbsp;&nbsp;{{$post->created_at->toDayDateTimeString()}}</h5>
    <h3> {{$post->body}}</h3>
    <hrpost
    <!-- show comments of  the post -->
    <h3>Comments:</h3>
	<div class="comments">
		<ul>
			@foreach($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}
					</strong>
					{{$comment->body}}<br>
					<a href="#">Delete</a>
					<a href="#">Edit</a>
				</li>

			@endforeach
		</ul>
	</div>

  {{-- add comment --}}
<div class="card">
<div class="card-block">
<form method="post" action="/posts/{{$post->id}}/comments">


  {{ csrf_field() }}
    <div class="form-group">
      <textarea name="body" placeholder="Your comment here..."   class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </form>
  @include('errors')

</div>
</div>

  @endsection
