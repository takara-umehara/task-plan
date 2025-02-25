<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Category Create</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="category[title]" placeholder="タイトル"/>
            </div>
        </form>
        <div class="footer">
            <a href="posts">戻る</a>
        </div>
    </body>
</html>