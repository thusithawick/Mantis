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

Route::get('/manti','App\Http\Controllers\MantiController@index')->name('manti.index');
Route::get('/manti/{id}','App\Http\Controllers\MantiController@show')->name('manti.show');
Route::post('/manti','App\Http\Controllers\MantiController@store')->name('manti.store');
