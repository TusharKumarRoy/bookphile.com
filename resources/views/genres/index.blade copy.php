@extends('layouts.app')

@section('title', 'Books - Bookphile')

@section('content')
    <h1>All Books</h1>
    
    @if($books->count() > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>
                    <a href="{{ route('books.show', $book) }}"><strong>{{ $book->title }}</strong></a>
                    @if($book->authors->count() > 0)
                        by 
                        @foreach($book->authors as $author)
                            <a href="{{ route('authors.show', $author) }}">{{ $author->full_name }}</a>
                            @if(!$loop->last) , @endif
                        @endforeach
                    @endif
                    </strong>
                    
                </li>
            @endforeach
        </ul>
    @else
        <p>No books found.</p>
    @endif
@endsection