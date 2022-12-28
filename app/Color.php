<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use SoftDeletes;

    function get_attribute(){
        return $this->hasMany( Attributes::class, 'color_id');
    }

    function get_color(){
        return $this->hasMany( Product::class, 'color_id');
    }

    function cart_color(){
        return $this->hasMany( Cart::class, 'color_id');
    }
}
