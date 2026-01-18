<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // Affiche le formulaire d’inscription
    public function inscription()
    {
        return view('auth.inscription');
    }

    // Affiche le formulaire de connexion
    public function connexion()
    {
        return view('auth.connexion');
    }

    // Affiche la page du tableau de bord utilisateur connecté
    public function profil()
    {
        return view('admin.profil');
    }

    // Affichage du profil
    public function show()
    {
        $user = Auth::user(); // Utilisateur connecté
        return view('Admin.profil', compact('user'));
    }

    // Enregistre un nouvel utilisateur
    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|digits:8',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12',
        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->adresse = $request->adresse;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->role = 'USER';
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect()->route('CONNEXION')->with('success', 'Compte créé avec succès !');
        } else {
            return back()->with('echec', 'Erreur lors de la création du compte.');
        }
    }

    // Authentifie un utilisateur
    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            Session::put('UserId', $user->id);
            Session::put('UserName', $user->nom);
            Session::put('UserRole', $user->role);

            return redirect()->route('TABLEAU');
        } else {
            return back()->with('echec', 'Email ou mot de passe incorrect.');
        }
    }


    // Mise à jour du profil
    public function updateProfil(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
        ]);

        $user->update($request->only('nom', 'prenom', 'email', 'telephone', 'adresse'));

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
    
    
    public function supprimerCompte($id)
    {
        $user = User::findOrFail($id);

        // Supprimer l’image de profil s’il y en a une
        if ($user->avatar && Storage::exists('public/articlesImages/' . $user->avatar)) {
            Storage::delete('public/articlesImages/' . $user->avatar);
        }

        // Supprimer le compte
        $user->delete();

        Auth::logout();
        Session::flush();

        return redirect()->route('CONNEXION')->with('success', 'Votre compte a été supprimé.');
    }


    // Déconnecte l’utilisateur
    public function logout()
    {
        if (Session::has('UserId')) {
            Session::forget(['UserId', 'UserName', 'UserRole']);
            Auth::logout();
        }

        return redirect()->route('CONNEXION')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
