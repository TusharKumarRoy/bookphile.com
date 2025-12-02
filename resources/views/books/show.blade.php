@extends('layouts.app')

@section('title', $book->title . ' - Bookphile')

@section('content')
    <h1>{{ $book->title }}</h1>
    
    @if($book->authors->count() > 0)
        <p><strong>Author(s):</strong>
            @foreach($book->authors as $author)
                <a href="{{ route('authors.show', $author) }}">{{ $author->full_name }}</a>
                @if(!$loop->last) , @endif
            @endforeach 
       </p>
    @endif
    
    @if($book->genres->count() > 0)
        <p><strong>Genre(s):</strong> {{ $book->genres->pluck('name')->join(', ') }}</p>
    @endif
    
    @if($book->page_count)
        <p><strong>Pages:</strong> {{ $book->page_count }}</p>
    @endif
    
    @if($book->description)
        <p><strong>Description:</strong> {{ $book->description }}</p>
    @endif
    
    <a href="{{ route('books.index') }}">← Back to Books</a>
@endsection