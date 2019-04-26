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
Route::get('sendmail', function(){
  $data = array(
    'name' => "Curso Laravel",
  );
  Mail::send('emails.welcome', $data, function($message){
    $message->from('somumyneiva@gmail.com', 'Curso de laravel');
    $message->to('somumyneiva@gmail.com')->subject('Test email curso de laravel');
  });
  return "Tu email ha sido enviado con exito";
});
Route::get('/', 'TestController@welcome')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Vistas usuario común
Route::get('/products/{id}', 'ProductController@show')->name('show');
Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::get('/perfil', 'perfil@perfil')->name('perfil');

Route::post('/order', 'CartController@update');


//Vistas Usuario Administrador
Route::middleware(['auth', 'admin'])->prefix('/admin')->namespace('Admin')->group(function(){
Route::get('/products', 'ProductController@index'); //listado
Route::get('/products/create', 'ProductController@create'); //Formulario de Creacion de Producto
Route::post('/products', 'ProductController@store'); //registrar
Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edición
Route::post('/products/{id}/edit', 'ProductController@update'); //Actualizar producto
Route::delete('/products/{id}', 'ProductController@destroy'); //Eliminar producto
Route::get('/products/{id}/images', 'ImageController@index'); //listado
Route::post('/products/{id}/images', 'ImageController@store'); //registrar
Route::delete('/products/{id}/images', 'ImageController@destroy'); //Eliminar Imagen
Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //Destacar imagen
});
//CR
//UP
//PUT PATCH DELETE
