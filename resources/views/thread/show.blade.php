@extends('thread.layout')

@section('content')
    <h1>{{ $thread->title }}</h1>

    @foreach ($messages as $message)
        <p>{{ $message->role }}</p>
        <p>{{ $message->message }}</p>
        <p>{{ $message->created_at }}</p>
        <br>
    @endforeach

    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
        <div>
            <label for="role">役割:</label>
            <input type="radio" id="role" name="role" value="User" checked>User
            <input type="radio" id="role" name="role" value="ChatGPT">ChatGPT
        </div>
        <div>
            <label for="message">メッセージ:</label>
            <input type="text" id="message" name="message">
        </div>
        <button type="submit">メッセージを作成</button>
    <a href={{ route('threads.list') }} class='btn btn-outline-primary'>記事一覧へ戻る</a>
@endsection