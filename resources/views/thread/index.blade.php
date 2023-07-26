@extends('thread.layout')

@section('content')
    <h1>スレッド一覧</h1>

    @foreach ($threads as $thread)
        <p>
            {{ $thread->title}},
            {{ $thread->overview }},
            {{ $thread->timestamps }}
        </p>
    @endforeach
@endsection