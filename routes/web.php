<?php

use App\Http\Controllers\TipeUserController;
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
Route::auth();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/user','UserController@index');
    Route::get('/user/add','UserController@create');
    Route::post('/user/add','UserController@store');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::patch('/user/{id}/edit','UserController@update');
    Route::delete('/user/{id}/delete','UserController@destroy');

    Route::get('/TipeUser','TipeUserController@index');
    Route::get('/TipeUser/add','TipeUserController@create');
    Route::post('/TipeUser/add','TipeUserController@store');
    Route::get('/TipeUser/{id}/edit','TipeUserController@edit');
    Route::patch('/TipeUser/{id}/edit','TipeUserController@update');
    Route::delete('/TipeUser/{id}/delete','TipeUserController@destroy');

    Route::get('/produk','ProdukController@index');
    Route::get('/produk/add','ProdukController@create');
    Route::post('/produk/add','ProdukController@store');
    Route::get('/produk/{id}/edit','ProdukController@edit');
    Route::patch('/produk/{id}/edit','ProdukController@update');
    Route::delete('/produk/{id}/delete','ProdukController@destroy');

});



