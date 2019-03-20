<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
  public function welcome(){
    $products = Product::all();
    return view('welcome')->with(compact('products'));
  }
  public function index(){
      return view('.admin.products.images.kartik-v-bootstrap-fileinput-80f5bb3.examples.index');//

  }
}
