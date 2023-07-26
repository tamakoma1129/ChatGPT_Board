@extends('thread.layout')

@section('content')
    <h1>スレッド一覧</h1>

    <table class='table table-striped table-hover'>
        <tr>
            <th>タイトル</th>
            <th>概要</th>
            <th>作成日時</th>
        </tr>
        @foreach ($threads as $thread)
            <tr>
                <td>
                    <a href="{{ route('thread.show', ['id' => $thread->id]) }}">
                        {{ $thread->title }}
                    </a>
                </td>
                <td>{{ $thread->overview }}</td>
                <td>{{ $thread->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection