@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->desc }}</p>
        <p>{{ $post->text }}</p>
        <p>{{ $post->date }}</p>
    </div>
@endsection