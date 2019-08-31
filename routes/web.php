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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/error', 'ErrorController@index')->name('error');

//Cadastros
Route::group(['prefix'=>'cliente'], function(){
    Route::get('','Cadastro\ClienteController@index');
    Route::get('create','Cadastro\ClienteController@create');
    Route::post('store','Cadastro\ClienteController@store');
});
