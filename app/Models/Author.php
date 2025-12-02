<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'biography',
        'birth_date',
        'death_date',
        'image',
        'nationality',
    ];

    // An author can have many books
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    // Helper: Get full name
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
