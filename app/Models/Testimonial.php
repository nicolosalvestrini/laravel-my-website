<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $appends = [
        'avatar_url',
    ];

    public function getAvatarUrlAttribute()
    {
        return $this->avatar_path ? asset('storage/' . $this->avatar_path) : null;
    }

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected $fillable = [
        'author_name',
        'author_role',
        'avatar_path',
        'message',
        'rating',
        'is_published',
    ];
}
