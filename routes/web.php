<?php

use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('commande.accueil');
});
Route::get('/produits_miel', function(){
    return view('produit_miel.create');
});
Route::get('/accueil', function(){
    return view('produit_miel.accueil');
});

Route::get('/create/{categorie}',[CommandeController::class, 'create']);

Route::resource('commande', CommandeController::class); 