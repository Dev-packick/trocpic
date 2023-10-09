<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function inscription(request $request)
    {
        return view('auth.inscription');
    }

    public function connexion(request $request)
    {
        return view('auth.connexion');
    }


    /*VALIDER LA REQUETE INSCRIPTION*/
    public function create(request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12',
        ]);

        /*SI LE FORMULAIRE EST VALIDE, ENREGISTRER UN NOUVEL UTILISATEUR*/
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->pseudo = $request->pseudo;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password = Hash::make($request->password);
         $user->save();
        if ($user) {
            return redirect()->route('CONNEXION')->with('success', 'Votre formulaire à été enregistré avec succès');
        } else {
            return back()->with('Echec', 'Email ou mot de passe incorrect');
        }
    }



    public function check(request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:12',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            Session::put('loggedUser', $user->id);
            return redirect()->route('TABLEAU');
        } else {
            return back()->with('echec', 'Email ou mot de passe incorrect');
        }

    }


    /** DECONNEXION */
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('CONNEXION')->with('deconnectez');
    }

}
