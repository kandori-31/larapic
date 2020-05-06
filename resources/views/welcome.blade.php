<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> 
    <header class="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/">Larapic</a></h1>
        <div class="user_nav grid-6">
          <a class="post" href="/tweets/new">投稿する</a>
        </div>
      </div>
    </header>
    <div class="contents row">
        @foreach ($Tweets as $Tweet)
            <div class="content_post" style="background-image: url({{ $Tweet -> image }});">
            <p>{{ $Tweet -> text }}</p>
            <span class="name">
            {{ $Tweet -> title }}
    </span>
    </div>

    <footer>
      <p>
        Copyright PicTweet 2019.
      </p>
    </footer>
@endforeach
</div>
    </body>
</html>
