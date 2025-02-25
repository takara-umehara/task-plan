<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog1</title>
        @vite('resources/js/vite_css.js')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
        <a href='/posts/complete'>complete list</a>
        <a href='/posts/create'>create</a>
        <a href='/posts/categorize'>categorize</a>
            @foreach ($posts as $post)
                <div class='post'>
                    <div class='element checkbox'>
                        <form action="/posts/{{ $post->id }}/check" id="form_{{ $post->id }}" method='POST'>
                            @csrf
                            <input type="checkbox" id="checkbox_{{ $post->id }}" onclick="checkPost({{ $post->id }})"/>
                        </form>
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
                        <p>{{ $post->deadline_dateTime->format('Y/m/d H:i') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links('pagination::semantic-ui') }}
        </div>
        <script>
            function checkPost(id){
                'use strict'

                if(confirm('完了済み')){
                    document.getElementById(`form_${id}`).submit();
                    console.log(document.getElementById(`form_${id}`));
                }else{
                    document.getElementById(`checkbox_${id}`).checked=false;
                }
            }
        </script>
    </body>
</html>