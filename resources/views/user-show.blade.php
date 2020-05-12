@extends('layouts.app')

@section('content')
<div class="contents row">
  <p>{{ $user -> name }}さんの投稿一覧</p>

  @foreach ($user->tweets as $tweet)
        <div class="content_post" style="background-image: url({{ $tweet -> image }});">
        <p>{{ $tweet -> text }}</p>
        <span class="name">
        {{ $tweet -> title }}
        </span>
        </div>
    @endforeach
    {{ $user->tweets->links() }}
  @endsection