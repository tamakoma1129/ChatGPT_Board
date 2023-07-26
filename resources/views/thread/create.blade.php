@extends('thread.layout')

@section('content')
    <h1>新しい記事の作成</h1>
    <form method="POST" action="">
        @csrf
        <div>
            <label for="title">タイトル:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="overview">概要:</label>
            <input type="text" id="overview" name="overview">
        </div>
        <button type="submit">記事を作成</button>
    </form>
@endsection