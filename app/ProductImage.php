<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;
class ProductImage extends Model
{
  //productsImage->products
  public function products(){
    return $this->belongsTo(Product::class);
  }
  public function getUrlAttribute(){
    if(substr($this->image, 0, 4) === "http"){
      return $this->image;
    }
    return '/images/products/' . $this->image;
  }
}
