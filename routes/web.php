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

Route::get('/', function () {
    return view('welcome');
});

/**
 * EXERCÍCIO 1
 * INSERT AND SELECT USERS
 */
Route::prefix('/users')->group(function(){
    Route::get('/', 'App\Http\Controllers\UsersController@index')->name('users.index');
    Route::get('/create', 'App\Http\Controllers\UsersController@create');
    Route::post('store', 'App\Http\Controllers\UsersController@store')->name('users.store');  
});

/**
 * EXERCÍCIO 2
 * ARRAYs
 */
Route::prefix('/array')->group(function(){
    Route::get('/', 'App\Http\Controllers\ArrayController@index');
    Route::get('/runArray', 'App\Http\Controllers\ArrayController@runArray');
});

/**
 * EXERCÍCIO 3
 * DML
 */
Route::prefix('/dml')->group(function(){
    Route::get('/', 'App\Http\Controllers\DMLController@index');
});