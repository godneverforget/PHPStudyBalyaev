@extends('layouts.app')
@section('content')
<h1>Create New Post</h1>

@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="title">Название:</label>
    <input type="text" name="title" required>
    <br>
    <label for="desc">Описание:</label>
    <textarea name="desc" required></textarea>
    <br>
    <label for="text">Текст:</label>
    <textarea name="text" required></textarea>
    <br>
    <label for="date">Дата:</label>
    <input type="date" name="date" required>
    <br>
    <button type="submit">Создать запись</button>
</form>
@endsection