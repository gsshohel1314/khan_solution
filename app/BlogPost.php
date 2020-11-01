<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model{
    protected $primaryKey='post_id';

    public function creator(){
        return $this->belongsTo('App\User','post_creator','id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','post_id','post_id')->where('replay_id',null);
    }

    public function user(){
    	return $this->belongsTo('App\User','post_creator','id');
    }
}
