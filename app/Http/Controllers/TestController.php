<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Product;
use Mail;

class TestController extends Controller
{
  public function welcome(){
    $products = Product::paginate(6);
    return view('welcome')->with(compact('products'));
  }
  public function getMigrar(){
    $products = Product::paginate(6);
    $exitCode = Artisan::call('migrate:refresh', ['--seed'=> true]);
    return view('welcome')->with(compact('products'));
  }
  public function email(){
    $data = array('name' => "Curso Laravel");
    Mail::send('emails.welcome', $data, function($message){
      $message->from('somumyneiva@gmail.com', 'Curso de laravel');
      $message->to('somumyneiva@gmail.com')->subject('Test email curso de laravel');
    });
    return "Tu email ha sido enviado con exito";
  }
}
