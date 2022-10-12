<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class Product extends Model
{
   protected $fillable = ['name', 'l_des', 'image', 's_des', 'cat_id', 'price', 'offer_price', 'status'];


   function images(){
        return $this->hasMany(Images::class,'type_id','id');
    }
}
