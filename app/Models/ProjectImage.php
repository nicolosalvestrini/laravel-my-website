<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $appends = ['image_url'];

    protected $fillable = [
        'project_id',
        'image_path',
        'caption',
        'sort_order',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
