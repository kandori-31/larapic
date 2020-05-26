@extends('layouts.app')


@section('content')
<div class ="contents row">
    <div class="content_post" style="background-image: url({{ $tweet -> image }});">
        @unless(Auth::guest())
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
        @endunless
        <p>{{ $tweet -> text }}</p>
        <span class="name">
        {{ $tweet -> title }}
        </span>
    </div>
    <div class="container">
        @guest
            <strong><p>※※※ コメントの投稿には新規登録/ログインが必要です ※※※</p></strong>
        @else
            <form action="/tweets/{{ $tweet -> id }}/comments" method="post" id="comment-form">
                {!! csrf_field() !!}
                <div class="form-group">
                <textarea class="form-control" id="description" name="text" placeholder="コメントする"></textarea>
                </div>
                <button type="submit" class="btn btn-default form__submit">SEND</button>
            </form>
        @endguest

        <div class="comments">
        <h4>＜コメント一覧＞</h4>
        @if ($tweet->comments)
            @foreach ($tweet->comments as $comment)
            <p>
                <strong>
                    <a href=/user/{{ $comment->user_id }}>{{ $comment->user->name }}</a >:
                </strong >
                {{ $comment->text }}
            </p > 
            @endforeach
        @endif
    </div>
</div>
@endsection
