@extends('layout')

@section('content')
<a href="posts/create">Create Data</a>
<ul>
  @foreach($posts as $post)
  <li><a href="posts/{{ $post->id }}">{{ $post->title }} [=] {{ $post->content}}</a></li>
  @endforeach
</ul>
@stop
