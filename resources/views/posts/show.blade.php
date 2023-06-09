@extends('layout')

@section('title', $post->title)

@section('content')
<div class="post-item">
  <div class="post-content">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    @can('update', $post)
    <a href="{{ route('posts.edit', [$post]) }}">Edit post</a>
    @endcan
    @can('delete', $post)
    <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
      @csrf
      @method('DELETE')
      <button class="delete" type="submit">Delete post</button>
    </form>
    @endcan
   <div class="post_details">
    <small>Posted by <em> <b>{{ $post->user->name }}</b></em> on <b>{{ $post->created_at->format('d.m.Y H:i') }}</b></small>

    </div>
  </div>
</div>
@endsection
