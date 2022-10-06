<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    function getProduct(){
    	return $this->hasOne(Product::class,'id','product_id');
    }

    function getProductImage(){
    	return $this->hasOne(Images::class,'type_id','product_id')->where('type','=','Product');
   	}
}
