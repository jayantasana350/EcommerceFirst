<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillabel = [
        'quantity',
    ];

    function product(){
        return $this->belongsTo( Product::class, 'product_id');
    }

    function attrubute(){
        return $this->belongsTo( Attributes::class, 'product_id');
    }

    function cartsize(){
        return $this->belongsTo( Size::class, 'size_id');
    }

    function cartcolor(){
        return $this->belongsTo( Color::class, 'color_id');
    }
}
