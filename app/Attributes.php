<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attributes extends Model
{
    use SoftDeletes;
    function productsid(){
        return $this->belongsTo( Product::class, 'product_id');
    }

    function products(){
        return $this->hasMany( Product::class, 'price');
    }

    function get_size(){
        return $this->belongsTo( Size::class, 'size_id');
    }

    function get_color(){
        return $this->belongsTo( Color::class, 'color_id');
    }

    function cartattribute(){
        return $this->hasMany( Cart::class, 'product_id');
    }

}
