<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', 'TestController@welcome')->name('welcome');
Route::get('/perfil', 'perfil@perfil')->name('perfil');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function(){

Route::get('/products', 'ProductController@index'); //listado
Route::get('/products/create', 'ProductController@create'); //formulario
Route::post('/products', 'ProductController@store'); //registrar
Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edición
Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
Route::delete('/products/{id}', 'ProductController@destroy'); //formulario

Route::get('/products/{id}/images', 'ImageController@index'); //listado
Route::post('/products{id}i/mages', 'ImageController@store'); //registrar
Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar



});
//CR
//UP
//PUT PATCH DELETE
