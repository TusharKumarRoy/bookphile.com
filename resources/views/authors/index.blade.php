@extends('layouts.app')

@section('title', 'Authors - Bookphile')

@section('content')
    <h1>All Authors</h1>
    
    @foreach($authors as $author)
        <a href="{{ route('authors.show' , $author) }}">
            {{ $author->full_name }} ({{ $author->books_count }} books)
        </a>
    @endforeach
@endsection
