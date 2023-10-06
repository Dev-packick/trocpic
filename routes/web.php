<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Login & Register & Logout
Route::get('/connexion', [AuthController::class, 'connexion'])->name("CONNEXION");
Route::get('/inscription', [AuthController::class, 'inscription'])->name("INSCRIPTION");
Route::post('/check', [AuthController::class, 'check'])->name("AUTHLOGIN");
Route::post('/create', [AuthController::class, 'create'])->name("NEWUSER");
Route::get('/logout', [AuthController::class, 'logout'])->name("LOGOUT");

// Routes Front (partie utilisateur)
Route::get('/', [ClientController::class, 'home'])->name("accueil");

// Routes Ajouter et accéder a la page de formulaire Troc
Route::post('/ajouter', [ClientController::class, 'ajouter'])->name("AJOUTER");
Route::get('/offre', [ClientController::class, 'addOffre'])->name("OFFRE");

// Routes Afficher et accéder a la page d'affichage Troc
Route::get('/recherche', [ClientController::class, 'view'])->name("BIENS");



Route::get('/contact', [ClientController::class, 'call'])->name("contact");
// Route::get('/inscription', [ClientController::class, 'adduser'])->name("inscription");




Route::middleware('auth', 'verified', 'CacheControl')->group(function(){
    // Routes Backend (partie administrateur)
    //Tableau de bord
    Route::get('/tableau', [AdminController::class, 'tab'])->name('TABLEAU');
    //Profil utilisateur
    Route::get('/profil', [AdminController::class, 'profil'])->name('profil');
    //Rechercher catégorie
    Route::get('/search-result', [AdminController::class, 'searchresult'])->name('recherche');
    //Messagerie
    Route::get('/messagerie', [AdminController::class, 'messagerie'])->name('messagerie');
    //Galerie images
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('images');
    Route::get('/classement', [AdminController::class, 'classement'])->name('evaluation');
    Route::get('/maps', [AdminController::class, 'maps'])->name('maps');
    //Publié Troc
    Route::get('/publication', [ClientController::class, 'add'])->name("PUBLICATION");
    //Supprimer Troc
    Route::delete('/SupprimerTroc/{id}', [ClientController::class, 'destroy'])->name('deleteTroc');
    //Modifié Troc
    Route::put('/utilisateurs/{id}', [ClientController::class, 'update'])->name('updateTroc');
    // Routes Afficher et accéder a la page d'affichage Troc
    Route::get('/utilisateurs', [ClientController::class, 'show'])->name("SERVICES");
});
