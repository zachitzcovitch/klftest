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

Route::get('/', 'HomeController@index');
Route::get('/wine/{wine}', 'HomeController@wine');
Route::post('/new', 'WineController@add_wine')->name('new');
Route::get('/json', 'WineController@show_first_five');
Route::get('/dbindex', 'HomeController@db_index');