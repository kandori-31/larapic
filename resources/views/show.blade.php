@extends('layouts.app')


@section('content')
<div class ="contents row">
<div class="content_post" style="background-image: url({{ $tweet -> image }});">
    @guest
    @else
        @if ($tweet->user_id ===   Auth::user() -> id)
            <div class="more">
            <span><img src = "/images/arrow_top.png"></span>
            <ul class="more_list">
                <li>
                <a href="/tweets/{{ $tweet -> id }}/edit">編集</a>
                <li>
                <form action="/tweets/{{ $tweet -> id }}" method = "post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button>削除する</button>
                </form>
                </li>
            </ul>
            </div>
        @endif
    @endguest
        <p>{{ $tweet -> text }}</p>
        <span class="name">
        {{ $tweet -> title }}
        </span>
</div>
@endsection
