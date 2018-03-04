<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains t/he "web" middleware group. Now create something great!
|
*/

//Route::get('/','HomeController@index');

//Route::post('/produto/store', 'ProdutoController@store');

Route::get('/', 'HomeController@index');
Route::get('/user/create', 'UserController@create');
//Route::get('/posts', 'PostController@index');

//Route::get('/post/store', 'PostController@index');
//Route::get();