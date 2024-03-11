@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
    <br>
    <label for="desc">Description:</label>
    <textarea name="desc" required>{{ old('desc', $post->desc) }}</textarea>
    <br>
    <label for="text">Text:</label>
    <textarea name="text" required>{{ old('text', $post->text) }}</textarea>
    <br>
    <label for="date">Date:</label>
    <input type="date" name="date" value="{{ old('date', $post->date) }}" required>
    <br>
    <button type="submit">Обновить запись</button>
</form>
@endsection