<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
  public function index(){
    $categories = Category::paginate(10);
      return view('.admin.categories.index')->with(compact('categories'));//listado
  }
  public function create(){
    return view('.admin.categories.create');

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
       return redirect('/admin/categories');
  }
  public function edit($id){
    $product = Product::find($id);
    return view('admin.products.edit')->with(compact('product'));//formulario edición

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
