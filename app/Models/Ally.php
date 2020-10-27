<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ally extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
