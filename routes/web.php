<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
//ruta del controlador personas
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::resource('personas','App\Http\Controllers\PersonasController')->names('personas');

// //ruta Middleware

// Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas')->middleware('auth');

// Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
// //ruta editar
// Route::get('personas/{nPerCodigo}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
// //ruta modificar con el metodo parcial partch
// Route::patch('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
// //ruta  store con metodo post
// Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
// Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
// //ruta eliminar con metodo destroy
// Route::delete('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');

//ruta del controlador contacto
Route::view('contacto', 'contacto')->name('contacto');
//ruta  store con metodo post 
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');

Auth::routes(['register'=> true]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// DB::listen(function($query){
//     var_dump($query->sql);
// });

Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller')->names('servicios');
//    ->middleware('auth');

Route::get('categorias/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');
