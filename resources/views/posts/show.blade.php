<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
        <a href="">{{ $post->category->name }}</a>
            <div class="content__post">
                <h3>本文</h3>
                <!-- 〆切時間（日時のみを出す） -->
                <p>{{ $post->body }}</p>    
            </div>
            <div>
                <p>カテゴリー：{{ $post->category->title }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </body>
</html>