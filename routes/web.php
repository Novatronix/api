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

route::get('helados','HeladosController@getAll') ->name('getAllHelados');

route::post('helados','HeladosController@add') ->name('addHelados');

route::get('helados/{id}','HeladosController@get') ->name('getHelados');

route::post('helados/{id}','HeladosController@edit') ->name('editHelados');

route::get('helados/delete/{id}','HeladosController@delete') ->name('deleteHelados');
