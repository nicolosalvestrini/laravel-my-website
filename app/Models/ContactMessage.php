<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{

    protected $casts = [
        'is_read' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'email',
        'message',
        'request_type',
        'is_read',
    ];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }


}
