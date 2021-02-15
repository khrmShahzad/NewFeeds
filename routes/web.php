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


Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/',  "NewsController@index");
Route::get('/edit/{id}',  "NewsController@edit");
Route::get('/show/{id}',  "NewsController@show");
Route::get('/create',  "NewsController@create");
Route::post('/store',  "NewsController@store");
Route::post('/update/{id}',  "NewsController@update");