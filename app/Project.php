<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    
    protected function projectCategory(){
        return $this->belongsTo('App\ProjectCategory','pro_cat_id','id');
    }
}
