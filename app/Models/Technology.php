<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $casts = [
        'show_in_skills' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'icon',
        'type',
        'show_in_skills',
        'sort_order',
    ];

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_technology');
    }
}
