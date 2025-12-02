<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
    // A genre can have many books (many-to-many relationship)
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
