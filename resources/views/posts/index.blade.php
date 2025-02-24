<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog1</title>
        <link rel="stylesheet" href={{ asset("public/css/index.css") }}>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
        <a href='/posts/complete'>complete list</a>
        <a href='/posts/create'>create</a>
            @foreach ($posts as $post)
                <div class='post'>
                    <div class='element checkbox'>
                        <input type="checkbox"/>
                    </div>
                    <div class='element title'>
                        <h2>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                    </div>
                    <div class='element category'>
                        <a href="">{{ $post->category->title }}</a>
                    </div>
                    <div class='element importance'>
                        <p>{{ $post->importance }}</p>
                    </div>
                    <div class='element deadline_dateTime'>
                        <p>{{ $post->deadline_dateTime }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>