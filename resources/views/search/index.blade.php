@extends('layouts.app')


@section('content')
<form class="search-form" action="search">
    <input type="text" name="keyword" value="{{ $keyword }}" class="search-input" placeholder="投稿を検索する"></input>
    <button type="submit" class="search-btn">検索</button>
</form>
<div class="contents row">
    @foreach ($tweets as $tweet)
        <div class="content_post" style="background-image: url({{ $tweet -> image }});">
        <div class="more">
        <span><img src = "/images/arrow_top.png"></span>
        <ul class="more_list">
            @guest
                <li>
                    <a href="/tweets/{{ $tweet -> id }}">詳細</a>
                </li>
            @else
                <li>
                    <a href="/tweets/{{ $tweet -> id }}">詳細</a>
                </li>
                @if ($tweet->user_id ===   Auth::user() -> id)
                    <li>
                    <a href="/tweets/{{ $tweet -> id }}/edit">編集</a>
                    <li>
                    <form action="/tweets/{{ $tweet -> id }}" method = "post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button>削除する</button>
                    </form>
                    </li>
                @endif
            @endguest
        </ul>
        </div>
        <p>{{ $tweet -> text }}</p>
        <span class="name">
        {{ $tweet -> title }}
        </span>
        </div>
    @endforeach
    {{ $tweets->links('pagination::default') }}
</div>
@endsection