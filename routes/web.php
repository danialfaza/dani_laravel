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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('users.layout'); 
});*/

Route::resource('biodata', 'BiodataController');

Route::get('/', 'CrudController@index');
Route::get('/add', 'CrudController@create');
Route::post('/store', 'CrudController@store');
Route::get('/read/{id}', 'CrudController@show');
Route::get('/edit/{id}', 'CrudController@edit');
Route::post('/update/{id}', 'CrudController@update');
Route::get('/delete/{id}', 'CrudController@destroy');

