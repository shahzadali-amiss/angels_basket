<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['name', 'l_des', 's_des', 'cat_id', 'price', 'offer_price', 'status'];
}
