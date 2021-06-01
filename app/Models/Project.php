<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'link', 'description', 'ally_id', 'ally_imag', 'porta_image', 'image', 'status'
    ];

    public function ally(){
        return $this->belongsTo('App\Models\Ally');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'projects_tags', 'project_id', 'tag_id');
    }
    public function technologies(){
        return $this->belongsToMany('App\Models\Technology', 'projects_technologies', 'project_id', 'technology_id');
    }
}
