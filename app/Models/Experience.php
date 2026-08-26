<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $casts = [
        'period_start' => 'date',
        'period_end' => 'date',
    ];
    
    protected $fillable = [
        'type',
        'title',
        'description',
        'period_start',
        'period_end',
        'sort_order',
    ];

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }   

}
