<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categorias', 'CategoriaController');

<<<<<<< HEAD
Route::resource('items', 'ItemController');

Route::resource('depositos', 'DepositoController');
=======
Route::resource('items', 'ItemController');
>>>>>>> 08514be1eb3ca5370d4eced85853b568bb65bdc7
