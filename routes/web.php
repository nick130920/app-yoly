<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('migrar',[
  'uses'=> 'TestController@getMigrar',
  'as' =>'ap1.getMigrar'
]);
Route::get('sendmail', 'TestController@email');
Route::get('/', 'TestController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Vistas usuario común
Route::get('/products/{id}', 'ProductController@show')->name('show');
Route::post('/cart', 'CartDetailController@store')->middleware('auth');;
Route::delete('/cart', 'CartDetailController@destroy')->middleware('auth');;

Route::get('/perfil', 'perfil@perfil')->name('perfil');

Route::post('/order', 'CartController@update');


//Vistas Usuario Administrador
Route::middleware(['auth', 'admin'])->prefix('/admin')->namespace('Admin')->group(function(){
  Route::get('/products', 'ProductController@index'); //listado
  Route::get('/products/create', 'ProductController@create'); //Creacion de Producto
  Route::post('/products', 'ProductController@store'); //registrar
  Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edición
  Route::post('/products/{id}/edit', 'ProductController@update'); //Actualizar producto
  Route::delete('/products/{id}', 'ProductController@destroy'); //Eliminar producto

  Route::get('/products/{id}/images', 'ImageController@index'); //listado
  Route::post('/products/{id}/images', 'ImageController@store'); //registrar
  Route::delete('/products/{id}/images', 'ImageController@destroy'); //Eliminar Imagen
  Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //Destacar imagen



  Route::get('/categories', 'CategoryController@index'); //listado
  Route::get('/categories/create', 'CategoryController@create'); //Creacion
  Route::post('/categories', 'CategoryController@store'); //registrar
  Route::get('/categories/{id}/edit', 'CategoryController@edit'); //formulario edición
  Route::post('/categories/{id}/edit', 'CategoryController@update'); //Actualizar
  Route::delete('/categories/{id}', 'CategoryController@destroy'); //Eliminar 
});
//CR
//UP
//PUT PATCH DELETE
