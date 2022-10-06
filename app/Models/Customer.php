<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    function getCity(){
    	return $this->hasOne(City::class,'id','city');
    }

    function getState(){
    	return $this->hasOne(State::class,'id','state');
    }
}
