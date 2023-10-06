<?php

namespace App\Http\Controllers;

use App\Models\Troc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function home(){
        return view('Client.home');
    }
    public function call(){
        return view('Client.contact');
    }
    public function adduser(){
        return view('Client.inscription');
    }


    // Accéder a la page de formulaire des Trocs
    public function addOffre(){
        return view('Client.offre');
    }
    public function add(){
        return view('Admin.publication');
    }
    // Accéder a la page d'affichage des Trocs
    public function show(){
        $troc  = Troc::all();
        return view('Admin.utilisateurs', compact('troc'));
    }

    public function view(){
        $troc  = Troc::all();
        return view('Client.recherche', compact('troc'));
    }

    // Ajouter un Troc
    public function ajouter(Request $request)
  {
        // Validez les données du formulaire
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'adresse' => 'string|max:255',
            'description' => 'required|string',
            'typeTroc' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $troc = new Troc();
        $troc->nom = $request->input('nom');
        $troc->adresse = $request->input('adresse');
        $troc->description = $request->input('description');
        $troc->typeTroc = $request->input('typeTroc');
        $troc->date = $request->input('date');

      if ($request->hasFile('image')) {
        $file_image= $request->file('image');
        $file_name_image= "images".time().'_'.$file_image->getClientOriginalName();
        $file_image-> move(public_path('articlesImages'), $file_name_image);
        $troc->image = $file_name_image;
         }
        // Enregistrez le modèle dans la base de données
        $troc->save();
        // Redirigez l'utilisateur vers la même page
        return back()->with('success', 'Formulaire soumis avec succès.');
  }


    // Supprimer un article
    public function destroy($id)
  {
        $troc = Troc::find($id);
        if (!$troc) {
            return back()->with('error', 'Le troc n\'existe pas.');
        }
        if ($troc->image) {
            Storage::delete('public/articlesImages/' . $troc->image);
        }
        $troc->delete();
        return back()->with("success", "Troc supprime");
  }


    public function update(Request $request, $id)
  {
    $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
    ]);

    $troc = Troc::find($id);

    if (!$troc) {
        return back()->with('error', 'Troc non trouvé');
    }

    // Gestion d'image
    if ($request->hasFile('image')) {
        $file_name_image = $request->image->store("articlesImages");
        // Supprimez l'ancienne image du serveur si elle existe
        $oldImagePath = public_path($troc->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        $troc->image = $file_name_image;
    }

    // Mettez à jour les autres attributs de l'article en fonction de vos besoins
    $troc->nom = $request->input('nom');
    $troc->adresse = $request->input('adresse');
    $troc->date = $request->input('date');
    $troc->typeTroc = $request->input('typeTroc');
    $troc->description = $request->input('description');

    $troc->save();
    return back()->with('success', 'Troc modifié avec succès');
    // return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès');
  }


}
