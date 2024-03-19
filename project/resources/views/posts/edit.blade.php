@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
    @csrf
    @method('PUT')

    <label for="title">Название:</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
    <br>
    <label for="desc">Описание:</label>
    <textarea name="desc" required>{{ old('desc', $post->desc) }}</textarea>
    <br>
    <label for="text">Текст:</label>
    <textarea name="text" required>{{ old('text', $post->text) }}</textarea>
    <br>
    <label for="date">Дата:</label>
    <input type="date" name="date" value="{{ old('date', $post->date) }}" required>
    <br>
    <button type="submit">Обновить запись</button>
</form>
@endsection
