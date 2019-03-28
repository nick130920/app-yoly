<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{

    public function index(){
      $products = Product::paginate(10);
        return view('.admin.products.index')->with(compact('products'));//listado

    }
    public function create(){
      $categoria_1 = Category::find(1);
      $categoria_2 = Category::find(2);
      $categoria_3 = Category::find(3);
      $categoria_4 = Category::find(4);
      $categoria_5 = Category::find(5);
      return view('.admin.products.create')->with(compact('categoria_1', 'categoria_2', 'categoria_3', 'categoria_4', 'categoria_5'));

    }
    public function store(Request $request){
         //registrar el nuevo producto en la bd
         //dd($request->all());
         $product = new Product();
         $product->name = $request->input('name');
         $product->price = $request->input('price');
         $product->reference = $request->input('reference');
         $product->description = $request->input('description');
         $product->category_id = $request->input('category');
         $product->total = $request->input('total');
         $product->long_description = $request->input('long_description');
         $product->save(); //INSERT
         return redirect('/admin/products');
    }

    public function edit($id){
      $product = Product::find($id);
      $categoria_1 = Category::find(1);
      $categoria_2 = Category::find(2);
      $categoria_3 = Category::find(3);
      $categoria_4 = Category::find(4);
      $categoria_5 = Category::find(5);
      return view('admin.products.edit')->with(compact('product', 'categoria_1', 'categoria_2', 'categoria_3', 'categoria_4', 'categoria_5'));//formulario edición

    }
    public function update(Request $request, $id){
         //actualizar producto en la bd
         //dd($request->all());
         $product = Product::find($id);
         $product->name = $request->input('name');
         $product->price = $request->input('price');
         $product->reference = $request->input('reference');
         $product->description = $request->input('description');
         $product->category_id = $request->input('category');
         $product->total = $request->input('total');
         $product->long_description = $request->input('long_description');
         $product->save(); //update
         return redirect('/admin/products');
    }
    public function destroy($id){

         $product = Product::find($id);
         $product->delete(); //delete

         return back();
    }
}
