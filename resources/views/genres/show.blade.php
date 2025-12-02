@extends('layouts.app')

@section('title', '{{ $genre->name }} - Bookphile')

@section('content')
    <h1>{{ $genre->name }}</h1>
    
    <p>{{ $genre->description }}</p>
    <h2>Books:</h2>
    @foreach($genre->books as $book)
        <a href="{{ route('books.show', $book) }}"> {{ $book->title }} </a>
    @endforeach
@endsection
