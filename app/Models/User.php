<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'slug',
        'email',
        'phone',
        'birthdate',
        'admission_date',
        'password',
        'position',
        'curriculum',
        'price_per_hour',
        'uphold_account',
        'tron_wallet',
        'profile_id',
        'photo',
        'logo',
        'ally_name'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     //Relación del cliente con sus proyectos
     public function projects(){
        return $this->hasMany('App\Models\Project');
    }
}
