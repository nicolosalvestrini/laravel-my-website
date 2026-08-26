<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'slug',
        'sort_order',
        'demo_url',
        'github_url',
        'category',
        'is_featured',
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology');
    }
}
