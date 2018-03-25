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

Route::namespace('portal')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
});

Route::namespace('forum')->group(function(){
    Route::get('/forum', 'ForumController@index');
});

Route::namespace('admin')->prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index');
    Route::get('/post/create', 'AdminController@create');
});
//Route::get('/posts', 'PostController@index');


//Route::get('/post/store', 'PostController@index');
//Route::get();