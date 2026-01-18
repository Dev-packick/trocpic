<?php

namespace App\Http\Controllers;

use App\Models\Troc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function home()
    {
        return view('Client.home');
    }

    public function call()
    {
        return view('Client.contact');
    }

    public function adduser()
    {
        return view('Client.inscription');
    }

    // Accéder à la page détails d'un Troc
    public function more()
    {
        return view('Client.details');
    }

    // Accéder à la page de formulaire des Trocs
    public function addOffre()
    {
        return view('Client.offre');
    }

    public function add()
    {
        return view('Admin.publication');
    }

    public function view_faq()
    {
        return view('Client.faq');
    }

    // Accéder à la page d'affichage des Trocs
    public function showtrocs()
    {
        $troc = Troc::all()->where("user_id", Auth::user()->id);
        return view('Admin.utilisateurs', compact('troc'));
    }

    public function show($id)
    {
        $troc = Troc::with(['comments.user'])->findOrFail($id);
        return view('client.detail-troc', compact('troc'));
    }

    public function view(Request $request)
    {
        $query = $request->input('q');
        $troc = Troc::where('nom', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orderByDesc('created_at')
            ->get();

        return view('Client.recherche', compact('troc'));
    }

    // Ajouter un Troc
    public function ajouter(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'description' => 'required|string|max:255',
            'typeTroc' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5 Mo
        ]);

        $troc = new Troc();
        $troc->nom = $request->input('nom');
        $troc->adresse = $request->input('adresse');
        $troc->description = Str::limit($request->input('description'), 255);
        $troc->typeTroc = $request->input('typeTroc');
        $troc->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $file_name_image = "images" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('articlesImages'), $file_name_image);
            $troc->image = $file_name_image;
        }

        $troc->save();

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

        return back()->with("success", "Troc supprimé");
    }

    // Mettre à jour un article
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5 Mo
            'description' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'typeTroc' => 'required|string|max:255',
        ]);

        $troc = Troc::find($id);

        if (!$troc) {
            return back()->with('error', 'Troc non trouvé');
        }

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $file_name_image = "images" . time() . '_' . $file_image->getClientOriginalName();
            $file_image->move(public_path('articlesImages'), $file_name_image);
            $troc->image = $file_name_image;
        }

        $troc->nom = $request->input('nom');
        $troc->adresse = $request->input('adresse');
        $troc->typeTroc = $request->input('typeTroc');
        $troc->description = Str::limit($request->input('description'), 255);

        $troc->save();

        return back()->with('success', 'Troc modifié avec succès');
    }
}
