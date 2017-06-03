@extends('partials.master')
  @section('content')
      @foreach($posts as $post)
        <li>
          <a href="/posts/{{$post->id}}">
            {{$post->title}}
          </a>
          <h3>{{$post->body}}</h3>
        </li>
      @endforeach
    @endsection
