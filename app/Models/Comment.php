<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $guarded=[];
    public function book()
    {
    	return $this->belongsTo('App\Models\Book');
    }
    public function user()
    {
    	return $this->belongsTo('App\Models\User')
    }
}
