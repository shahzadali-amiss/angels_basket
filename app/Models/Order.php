<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getCarts(){
    	return $this->hasMany(Cart::class,'order_id','order_id');
    }
}
