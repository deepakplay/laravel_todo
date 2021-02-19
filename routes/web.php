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

Route::get('/create', function(){
	return view('create');
})->name('create');
Route::post('/store', 'TodoController@store')->name('store');

Route::get('/todo/{todo}', 'TodoController@get');

Route::get('/edit/{todo}', 'TodoController@edit');
Route::post('/update/{todo}', 'TodoController@update');

Route::get('/delete/{todo}', 'TodoController@destroy');
Route::get('/complete/{todo}', 'TodoController@complete');
