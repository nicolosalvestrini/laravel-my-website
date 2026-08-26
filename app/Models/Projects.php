<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    

    public function technologies()
    {
        return $this->belongsToMany(Technology, 'project_technology');
    }
}
