@extends('thread.layout')

@section('content')
    <h1>スレッド一覧</h1>
    <a href={{ route('threads.create') }} class='btn btn-outline-primary'>新規スレッドを作成</a>
    <table class='table table-striped table-hover'>
        <tr>
            <th>タイトル</th>
            <th>概要</th>
            <th>作成日時</th>
        </tr>
        @foreach ($threads as $thread)
            <tr>
                <td>
                    <a href={{ route('threads.detail', ['id' => $thread->id]) }}>
                        {{ $thread->title }}
                    </a>
                </td>
                <td>{{ $thread->overview }}</td>
                <td>{{ $thread->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection