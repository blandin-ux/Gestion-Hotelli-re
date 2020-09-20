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
    return view('FrontOffice/welcome');
});

Route::get('/chambres','FrontofficeController@chambre');

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

//route client Terminée
Route::resource('/clients','ClientController');
Route::post('/clients/update','ClientController@update');
//fin catégorie

//GESTION DES CATEGORIES Terminée
Route::resource('/categories','CategorieController');
Route::post('/categories/update','CategorieController@update');
//Fin catégories

//Gestion des chambres Terminée
Route::resource('/chambres','ChambreController');
Route::post('/chambres/update','ChambreController@update');
//Fin chambres

//Gestion des Tarifs Terminée
Route::resource('/tarifs','TarifierController');
Route::post('/tarifs/update','TarifierController@update');
//Fin Tarifs
    