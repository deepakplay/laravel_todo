<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodoController@index')->name('index');
Route::get('/create', 'TodoController@create')->name('create');
Route::post('/store', 'TodoController@store')->name('store');
Route::get('/todo/{todo}', 'TodoController@get')->name('get');
Route::get('/edit/{todo}', 'TodoController@edit')->name('edit');
Route::post('/update/{todo}', 'TodoController@update')->name('update');
Route::get('/delete/{todo}', 'TodoController@destroy')->name('delete');
Route::get('/complete/{todo}', 'TodoController@complete')->name('complete');
