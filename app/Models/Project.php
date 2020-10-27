<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'link', 'description','ally_id', 'tag_id',
    ];

    public function ally()
    {
        return $this->belongsTo('App\Models\Ally');
    }
    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }
}
