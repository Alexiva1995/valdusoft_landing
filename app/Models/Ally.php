<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ally extends Model
{
    protected $fillable = [
        'name', 'description', 'link', 'logo', 'logo_circular', 'name_image',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
