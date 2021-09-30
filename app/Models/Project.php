<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'start_date', 'user_id', 'slug', 'ending_date', 'link', 'description', 'logo', 'circular_logo', 'country_id', 'type', 'status', 'visible_landing'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'projects_tags', 'project_id', 'tag_id');
    }
    public function technologies(){
        return $this->belongsToMany('App\Models\Technology', 'projects_technologies', 'project_id', 'technology_id');
    }
}
