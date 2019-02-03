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

Route::resource('clients', 'ClientsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/clients', function () {
    return view('clients');
});*/

Route::get('/clients', 'ClientsController@index');

Route::get('/clients.create', 'ClientsController@create');

Route::get('/clients.edit', 'ClientsController@edit');

Route::get('/clients.destroy', 'ClientsController@destroy');