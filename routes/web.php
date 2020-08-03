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
// routes pour la gestion des clients
Route::get('/clients','Client\ClientController@index');
route::get('/clients/create','Client\ClientController@create');
route::post('/clients','Client\ClientController@store');
route::get('/clients/{id}','Client\ClientController@show');
route::get('/clients/edit/{id}','Client\ClientController@edit');
route::post('clients/save','Client\ClientController@save');
route::get('/clients/open/{id}','Client\ClientController@open');
route::get('/clients/close/{id}','Client\ClientController@close');
// fin gestin des clients
