<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo('App\BlogPost');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function replay(){
        return $this->hasMany('App\Comment', 'replay_id','id');
    }
}
