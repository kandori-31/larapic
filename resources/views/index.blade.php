@extends('layouts.app')



@section('content')
<form class="search-form" action="search">
    <input type="text" name="keyword"  class="search-input" placeholder="投稿を検索する"></input>
    <button type="submit" class="search-btn">検索</button>
</form>
<div class="contents row">
    @foreach ($Tweets as $Tweet)
        <div class="content_post" style="background-image: url({{ $Tweet -> image }});">
        <div class="more">
        <span><img src = "/images/arrow_top.png"></span>
        <ul class="more_list">
            @guest
                <li>
                    <a href="/tweets/{{ $Tweet -> id }}">詳細</a>
                </li>
            @else
                <li>
                    <a href="/tweets/{{ $Tweet -> id }}">詳細</a>
                </li>
                @if ($Tweet->user_id ===   Auth::user() -> id)
                    <li>
                    <a href="/tweets/{{ $Tweet -> id }}/edit">編集</a>
                    <li>
                    <form action="/tweets/{{ $Tweet -> id }}" method = "post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="delete-btn">削除する</button>
                    </form>
                    </li>
                @endif
            @endguest
        </ul>
        </div>
        <p>{{ $Tweet -> text }}</p>
        <span class="name">
        {{ $Tweet -> title }}
        </span>
        </div>
    @endforeach
    {{ $Tweets->links('pagination::default') }}
</div>
@endsection