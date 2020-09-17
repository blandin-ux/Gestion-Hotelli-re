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
route::get('/deconnexion','Auth\CustomLogController@deconnecter')->middleware('auth');
Auth::routes();
// routes pour la gestion des clients
Route::resource('/clients','ClientController');
// fin gestin des clients

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//route hotels
Route::resource('/hotels','HotelController');
Route::post('/hotels','HotelController@store');
Route::post('/hotels/update','HotelController@update');
//fin hotels

//route client
Route::resource('/clients','ClientController');
Route::post('/clients/update','ClientController@update');
//fin catégorie

//GESTION DES CATEGORIES
Route::resource('/categories','CategorieController');
//Fin catégories

//Gestion des chambres
Route::resource('/chambres','ChambreController');
Route::post('/chambres/update','ChambreController@update');
//
    