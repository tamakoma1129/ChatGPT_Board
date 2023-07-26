@extends('thread.layout')

@section('content')
    <h1>{{ $thread->title }}</h1>

    @foreach ($messages as $message)
        <p>{{ $message->role }}</p>
        <p>{{ $message->message }}</p>
        <p>{{ $message->created_at }}</p>
    @endforeach
@endsection