<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_name', 'description', 'slug'
    ];

    function subcategory(){
        return $this->hasMany( SubCategory::class, 'category_id');
    }

    function category(){
        return $this->hasMany( Product::class, 'category_id');
    }

}
