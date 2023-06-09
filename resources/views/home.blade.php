@extends('layout')


@section('title', 'Home')

@section('content')

<div class="home_head">
  <h1>Project Posts</h1>
</div>

<div class="home_search">
  <a href="{{ route('search') }}">Click here to Search 🔎</a>
</div>


@forelse ($posts as $post)
<div class="post-item">
  <div class="post-content">
    <h2><a href="{{ route('posts.show', [$post]) }}">{{ $post->title }}</a></h2>
    <p>{{ $post->description }}</p>

    <div class="post_details">
    <small>Posted by <em> <b>{{ $post->user->name }}</b></em> on <b>{{ $post->created_at->format('d.m.Y H:i') }}</b></small>

    </div>

  </div>
</div>
@empty
<h2>There are no posts yet.</h2>
@endforelse
@endsection
