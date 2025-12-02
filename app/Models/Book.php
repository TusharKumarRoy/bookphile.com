<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'isbn',
        'description',
        'page_count',
        'publication_date',
        'cover_image',
        'language',
        'average_rating',
        'ratings_count',
    ];

    // a book can have many authors (many-to-many relationship) 
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    // a book can have many genres (many-to-many relationship)
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function readingStatuses()
    {
        return $this->hasMany(ReadingStatus::class);
    }
}
