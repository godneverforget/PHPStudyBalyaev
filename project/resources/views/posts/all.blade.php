@extends('layouts.app')

@section('content')
<h1>All Posts</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>
                <a href="{{ route('posts.one', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </td>
            <td>{{ $post->desc }}</td>
            <td>
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                    Edit
                </a>
            </td>
            <td>
                <a href="{{ route('posts.del', ['id' => $post->id]) }}" onclick="return confirm('Вы уверены что хотите удалить запись?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection