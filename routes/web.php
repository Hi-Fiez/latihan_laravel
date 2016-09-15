<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('artikel','ArtikelController@index');
Route::get('artikel/add','ArtikelController@add');
Route::get('artikel/save','ArtikelController@save');
Route::get('artikel/edit/{id}','ArtikelController@edit');
Route::get('artikel/update','ArtikelController@update');
Route::get('artikel/delete/{id}','ArtikelController@delete');