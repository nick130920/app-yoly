<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Product;

class TestController extends Controller
{
  public function welcome(){
    $products = Product::paginate(12);
    return view('welcome')->with(compact('products'));
  }
  public function getMigrar(){
    $products = Product::paginate(12);
    $exitCode = Artisan::call('migrate:refresh', ['--seed'=> true]);
    return view('welcome')->with(compact('products'));
  }
}
