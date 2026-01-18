<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessagerieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\TrocsController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Login & Register & Logout
Route::get('/connexion', [AuthController::class, 'connexion'])->name("CONNEXION");
Route::get('/inscription', [AuthController::class, 'inscription'])->name("INSCRIPTION");
Route::post('/check', [AuthController::class, 'check'])->name("AUTHLOGIN");
Route::post('/create', [AuthController::class, 'create'])->name("NEWUSER");
Route::get('/logout', [AuthController::class, 'logout'])->name("LOGOUT");


// Route page d'accueil
Route::get('/', [ClientController::class, 'home'])->name("accueil");
// Route page contact
Route::get('/contact', [ClientController::class, 'call'])->name("contact");
// Routes page proposer coté front
Route::post('/ajouter', [ClientController::class, 'ajouter'])->name("AJOUTER");
Route::get('/offre', [ClientController::class, 'addOffre'])->name("OFFRE");
// Routes page rechercher coté front
Route::get('/recherche', [ClientController::class, 'view'])->name("BIENS");
// Routes envoyer un Message coté Front
Route::post('/envoyer', [MessagerieController::class, 'envoyer'])->name("ENVOI");
// Routes envoyer un commentaire coté Front
Route::post('/details/{troc_id}/commentaire', [CommentaireController::class, 'storeComment'])->name('SENDCOMMENT');
// Routes afficher un commentaire coté Front
Route::get('/details/{troc}', [TrocsController::class, 'details'])->name('DETAILS');
// Route page d'accueil
Route::get('/faq', [ClientController::class, 'view_faq'])->name('FAQ');



Route::middleware('auth', 'verified', 'CacheControl')->group(function(){
    //Tableau de bord
    Route::get('/tableau', [AdminController::class, 'tab'])->name('TABLEAU');
    // Profil utilisateur
    Route::get('/profil', [AuthController::class, 'show'])->name('profil');
    Route::put('/profil/{id}', [AuthController::class, 'updateProfil'])->name('modifierProfil');
    Route::delete('/profil/{id}', [AuthController::class, 'supprimerCompte'])->name('supprimerCompte');

    //Publié Troc
    Route::get('/publication', [ClientController::class, 'add'])->name('PUBLICATION');
    //Supprimer Troc
    Route::delete('/SupprimerTroc/{id}', [ClientController::class, 'destroy'])->name('deleteTroc');
    //Modifié Troc
    Route::put('/utilisateurs/{id}', [ClientController::class, 'update'])->name('updateTroc');
    // Routes Afficher mes Trocs
    Route::get('/utilisateurs', [ClientController::class, 'showtrocs'])->name('SERVICES');
    //Rechercher catégorie
    Route::get('/gestion', [AdminController::class, 'interface'])->name('INTERFACE');
    
    Route::get('/messagerie', [MessagerieController::class, 'lire'])->name('LECTURE');
    Route::delete('/SupprimerSms/{id}', [MessagerieController::class, 'destroySms'])->name('deleteMessage');
    Route::post('/envoyer-message', [MessagerieController::class, 'envoyer'])->name('repondreMessage');
    
    Route::post('/commentaires/store/{troc_id}', [CommentaireController::class, 'storeComment'])   ->name('SENDCOMMENT');
    Route::put('/commentaires/{id}', [CommentaireController::class, 'updateComment'])->name('UPDATECOMMENT');
    Route::delete('/commentaires/{id}', [CommentaireController::class, 'deleteComment'])->name('DELETECOMMENT');


    //Galerie images
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('images');
    Route::get('/maps', [AdminController::class, 'maps'])->name('maps');
});