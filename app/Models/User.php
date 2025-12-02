<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'name',  // keep for compatibility
        'email',
        'password',
        'bio',
        'profile_image',
        'role',
        'email_visible',
    ];


    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function isAdmin()
    {
        return in_array($this->role ,['admin','master_admin']);
    }
    public function isMasterAdmin()
    {
        return $this->role == 'master_admin';
    }


    public function readingStatuses()
    {
        return $this->hasMany(ReadingStatus::class);
    }

}
