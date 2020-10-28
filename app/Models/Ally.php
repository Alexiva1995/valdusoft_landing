<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ally extends Model
{
    protected $fillable = [
        'name', 'description','logo',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
