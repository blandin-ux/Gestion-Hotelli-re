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
Route::get('/clients','Client\ClientController@index')->middleware('auth');
Route::get('/clients/create','Client\ClientController@create')->middleware('auth');
Route::post('/clients','Client\ClientController@store')->middleware('auth');
Route::get('/clients/{id}','Client\ClientController@show')->middleware('auth');
Route::get('/clients/edit/{id}','Client\ClientController@edit')->middleware('auth');
Route::post('clients/save','Client\ClientController@save')->middleware('auth');
Route::get('/clients/open/{id}','Client\ClientController@open')->middleware('auth');
Route::get('/clients/close/{id}','Client\ClientController@close')->middleware('auth');
// fin gestin des clients


// gestion des inventaires
Route::resource('/inventaires', 'InventaireController');

// route tickets (achats)
Route::get('/achats','AchatController@index')->middleware('auth');
Route::get('/achats/create','AchatController@create')->middleware('auth');
Route::get('/ticket/add-article','AchatController@addArticle')->middleware('auth');
Route::get('/ticket/valider/{id}','AchatController@valider')->middleware('auth');
Route::get('/ticket/annuler/{id}','AchatController@annuler')->middleware('auth');
Route::get('/achats/{id}/show','AchatController@show')->middleware('auth');
Route::get('/ticket/katoula/{id}','AchatController@katoula')->middleware('auth');
Route::get('/achats/edit/{id}','AchatController@edit')->middleware('auth');
Route::get('/achats','AchatController@index')->middleware('auth');
Route::post('/achats','AchatController@store')->middleware('auth');
Auth::routes();

// route factures
Route::get('vente/create','VenteController@create')->middleware('auth');
Route::post('/facture/add-client','VenteController@addClient')->middleware('auth');
Route::get('facture/add-article','VenteController@addArticle')->middleware('auth');
Route::get('/facture/valider/{id}','VenteController@valider')->middleware('auth');
Route::get('/facture/annuler/{id}','VenteController@annuler')->middleware('auth');
Route::get('/facture/index','VenteController@index')->middleware('auth');
Route::get('/facture/{id}/show','VenteController@show')->middleware('auth');
Route::get('/facture/katoula/{id}','VenteController@katoula')->middleware('auth');
Route::get('/vente/edit/{id}','VenteController@edit')->middleware('auth');
Route::post('/ventes','VenteController@store')->middleware('auth');
// fin factures
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//


    //GESTION DES CATEGORIES
    Route::get('liste-categories', 'CategorieController@index')->middleware('auth');
    Route::get('ajouter-categorie', 'CategorieController@create')->middleware('auth');
    Route::post('store-categorie', 'CategorieController@store')->middleware('auth');
    Route::get('afficher-categorie/{id}', 'CategorieController@show')->middleware('auth');
    Route::get('modifier-categorie/{id}', 'CategorieController@edit')->middleware('auth');
    Route::post('save-categorie', 'CategorieController@save')->middleware('auth');
    Route::get('activer-categorie/{id}', 'CategorieController@activer')->middleware('auth');
    Route::get('desactiver-categorie/{id}', 'CategorieController@desactiver')->middleware('auth');
    //
    
    
        //GESTION DES ARTICLES
    Route::get('gestion-articles', 'ArticleController@index')->middleware('auth');
    Route::get('ajouter-article', 'ArticleController@create')->middleware('auth');
    Route::post('store-article', 'ArticleController@store')->middleware('auth');
    Route::get('afficher-article/{id}', 'ArticleController@show')->middleware('auth');
    Route::get('modifier-article/{id}', 'ArticleController@edit')->middleware('auth');
    Route::post('save-article', 'ArticleController@save')->middleware('auth');
    Route::get('activer-article/{id}', 'ArticleController@activer')->middleware('auth');
    Route::get('desactiver-article/{id}', 'ArticleController@desactiver')->middleware('auth');
    //
    
    
        //GESTION DES STOCKS
    Route::get('gestion-stocks', 'StockController@index')->middleware('auth');
    Route::get('ajouter-stock', 'StockController@create')->middleware('auth');
    Route::post('store-stock', 'StockController@store')->middleware('auth');
    Route::get('afficher-stock/{id}', 'StockController@show')->middleware('auth');
    Route::get('modifier-stock/{id}', 'StockController@edit')->middleware('auth');
    Route::post('save-stock', 'StockController@save')->middleware('auth');
    Route::get('activer-stock/{id}', 'StockController@activer')->middleware('auth');
    Route::get('desactiver-stock/{id}', 'StockController@desactiver')->middleware('auth');
    Route::get('articles-en-stock', 'StockController@articlesEnStock')->middleware('auth');
    Route::get('rupture-stocks', 'ArticleController@rupture')->middleware('auth');
    //Enrées en stock
    Route::get('ajouter-entree', 'EntreeController@create')->middleware('auth');
    Route::post('store-entree', 'EntreeController@store')->middleware('auth');
    Route::post('save-entree', 'EntreeController@save')->middleware('auth');
    Route::post('nouvelle-entree', 'EntreeController@nouvelleEntree')->middleware('auth');
    Route::get('confirmer-entree-stock/{id}', 'EntreeController@confirmer')->middleware('auth');
    Route::get('annuler-entree-stock/{id}', 'EntreeController@annuler')->middleware('auth');
    Route::post('entree-en-stock', 'EntreeController@store')->middleware('auth');
    //