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
<<<<<<< HEAD
Route::get('/admin/connexion',[AdminControllers::class ,'connexion']);
#Route::get('/admin/seconnecter',function (){
#   return "Connecter vous";
#});
Route::get('/admin/connecter',[AdminControllers::class ,'connecter']);
#Route::get('/admin/connecter',function (){
#   return "Bienvenue admin";
#});

Route::get('/admin/ModificationPrix',[AdminControllers::class ,'ModificationPrix']);
#Route::get('/admin/Modificationprix',function (){
#    return "Vous pouvez modifier les prix ";
#});

Route::get('/admin/PromotionPrix',[AdminControllers::class ,'PromotionPrix']);
#Route::get('/admin/Promotionprix',function (){
#    return "Vous pouvez appliquer une promotion ";
#});

Route::get('/admin/Stock',[AdminControllers::class ,'Stock']);
#Route::get('/admin/Stock',function (){
#    return "Vous pouvez gerer le stock";
#});

Route::get('/admin/SeDeconnetcer',[AdminControllers::class ,'SeDeconnetcer']);
#Route::get('/admin/sedeconnecter',function (){
#   return "deconnecter vous ";
#});


Route::fallback(function(){
 return redirect('/');

});
=======
>>>>>>> main
