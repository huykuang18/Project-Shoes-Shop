<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    public $timestamps=false;
    public function product_comments()
    {
    	return $this->hasMany(\App\Rate::class,'productID','id');
    }
}