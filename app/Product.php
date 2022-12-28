<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    function attribute(){
        return $this->belongsTo( Attributes::class, 'price');
    }

    function attributes(){
        return $this->hasMany( Attributes::class, 'product_id');
    }

    function get_color(){
        return $this->belongsTo( Color::class, 'color_id');
    }


    function categories(){
        return $this->belongsTo( Category::class, 'category_id');
    }

    function cart(){
        return $this->hasMany( Cart::class, 'product_id');
    }

    function product(){
        return $this->hasMany( Order::class, 'product_id');
    }

}
