<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use SoftDeletes;

    function get_attribute(){
        return $this->hasMany( Attributes::class, 'size_id');
    }

    function get_size(){
        return $this->hasMany( Attributes::class, 'size_id');
    }

    function cart_size(){
        return $this->hasMany( Cart::class, 'size_id');
    }
}
