@extends('layouts.app')

@section('title', 'Genres - Bookphile')

@section('content')
    <h1>All Genres</h1>
    
    @foreach($genres as $genre)
        <a href="{{ route('genres.show' , $genre) }}">
            {{ $genre->name }} {{ $genre->slug }} ({{ $genre->books_count }} books)
        </a>
    @endforeach
@endsection
