<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
  //productsImage->products
  public function products(){
    return $this->belongsTo(Product::class);
  }
}
