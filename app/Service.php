<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected function categoryName(){
        return $this->belongsTo('App\ServiceCategory','cat_id','id');
    }
}
