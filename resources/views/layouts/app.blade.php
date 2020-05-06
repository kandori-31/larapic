<!-- resources/views/layouts/app.blade.phpとして保存 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap4 CDN -->
    <title>Larapic</title>
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
   
    {{-- コンテンツの表示 --}}
    <div class="container">
        @yield('content')
    </div>

    <footer>
      <p>
        Copyright PicTweet 2019.
      </p>
    </footer>
</div>
</body>