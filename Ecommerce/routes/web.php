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

Route::get('/client/inscription', function(){
    return 'Inscription';
});

Route::get('/client/seconnecter', function(){
    return 'Se connecter';
});

Route::get('/client/connexion', function(){
    return 'Connexion';
});

Route::get('/client/deconnecter', function(){
    return 'Déconnecter';
});

Route::get('/client/panier/AjtProduit', function(){
    return 'Ajout Produit';
});

Route::get('/client/panier/SupProduit', function(){
    return 'Supprimer produit';
});

Route::get('/client/panier/VldPanier', function(){
    return 'Valider Panier';
}); 

Route::get('/client/commande/VldCommande', function(){
    return 'Valider Commande';
});