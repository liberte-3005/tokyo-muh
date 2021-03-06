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
    return view('tokyo');
});

Route::get('', 'PostsController@index');
Route::post('', 'PostsController@store');
Route::post('/{id}', 'PostsController@delete');
Route::get('/cities', 'PostsController@cities');
Route::get('/del', 'Controller@index');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
