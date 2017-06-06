<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function books()
    {
    	return $this->hasMany('App\Models\Book');
    }
    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }
    public function role()
    {
    	return $this->belongsTo('App\Models\Role','role_id');
    }
}
