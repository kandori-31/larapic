@extends('layouts.app')



@section('content')
<div class="contents row">
    @foreach ($Tweets as $Tweet)
        <div class="content_post" style="background-image: url({{ $Tweet -> image }});">
        <div class="more">
        <span><img src = "/images/arrow_top.png"></span>
        <ul class="more_list">
            <li>
            <a href="/tweets/{{ $Tweet -> id }}">詳細</a>
            </li>
            <li>
            <a href="/tweets/{{ $Tweet -> id }}/edit">編集</a>
            <li>
            <form action="/tweets/{{ $Tweet -> id }}" method = "post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button>削除する</button>
            </form>
            </li>
        </ul>
        </div>
        <p>{{ $Tweet -> text }}</p>
        <span class="name">
        {{ $Tweet -> title }}
        </span>
        </div>
    @endforeach
    {{ $Tweets->links() }}
</div>
@endsection