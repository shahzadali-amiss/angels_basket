<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function images(){
        return $this->hasMany(Images::class,'type_id','id');
    }

    function image(){
        return $this->hasOne(Images::class,'type_id','id');
    }
}
