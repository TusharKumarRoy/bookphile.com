@extends('layouts.app')

@section('title', '{{ $author->full_name }} - Bookphile')

@section('content')
    <h1>{{ $author->full_name }}</h1>
    
    <p>{{ $author->biography }}</p>
    <h2>Books:</h2>
    @foreach($author->books as $book)
        <a href="{{ route('books.show', $book) }}"> {{ $book->title }} </a>
    @endforeach
@endsection
