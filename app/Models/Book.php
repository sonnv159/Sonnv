<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    protected $guarded =[];
    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }
    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id');
    }
}
