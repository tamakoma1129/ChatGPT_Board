<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>ChatGPT_Board</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>スレッド一覧</h1>

        @foreach ($threads as $thread)
            <p>
                {{ $thread->title}},
                {{ $thread->overview }},
                {{ $thread->timestamps }}
            </p>
        @endforeach
    </body>
</html>