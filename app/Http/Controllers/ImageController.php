<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ImageController extends Controller
{
  public function index($id){

    $product = Product::find($id);
    $images = $product->images;
      return view('.admin.products.images.index')->with(compact('product', 'images'));//listado

  }
  public function store(Request $request){
       //registrar el nuevo producto en la bd
       //dd($request->all());
       $product = new Product();
       $product->name = $request->input('name');
       $product->save(); //INSERT
       return redirect('/admin/products');
  }
  public function destroy($id){

       $product = Product::find($id);
       $product->delete(); //delete

       return back();
  }
    //
}
