<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'name',
    ];

    public function projects(){
        return $this->belongsToMany('App\Models\Project', 'projects_technologies', 'technology_id', 'project_id');
    }
}
