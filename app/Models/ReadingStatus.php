<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingStatus extends Model
{
    protected $fillable = [
    'user_id', 'book_id', 'status', 'started_reading', 
    'finished_reading', 'current_page', 'notes', 'is_favorite'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

}
