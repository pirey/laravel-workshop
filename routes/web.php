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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::delete('/post/{id}', 'PostController@destroy');
Route::get('post/edit/{id}', 'PostController@edit');
Route::put('post/update/{id}', 'PostController@update');

