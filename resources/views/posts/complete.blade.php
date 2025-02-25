<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        @vite('resources/js/vite_css.js')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Complete list</h1>
        <div class='posts'>
        <a href='/posts'>incomplete list</a>
        <a href='/posts/create'>create</a>
            @foreach ($posts as $post)
                <div class='post'>
                    <div class='element completedTitle'>
                        <h2>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                    </div>
                    <div class='element completedCategory'>
                        <a href="">{{ $post->category->title }}</a>
                    </div>
                    <div class='element completedImportance'>
                        <p>{{ $post->importance }}</p>
                    </div>
                    <div class='element completedDeadline_dateTime'>
                        <p>{{ $post->deadline_dateTime }}</p>
                    </div>
                    <div class='element back'>
                        <form action="/posts/{{ $post->id }}/back" id="form_back_{{ $post->id }}" method='POST'>
                            @csrf
                            <button type="button" onclick="backPost({{ $post->id }})">back</button> 
                        </form>
                    </div>
                    <div class='element delete'>
                        <form action="/posts/{{ $post->id }}/delete" id="form_delete_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            function backPost(id) {
                'use strict'

                if (confirm('未完了のリストに戻しますか？')) {
                    document.getElementById(`form_back_${id}`).submit();
                }
            }
            
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_delete_${id}`).submit();
                }
            }
        </script>
    </body>
</html>