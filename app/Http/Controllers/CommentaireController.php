<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Enregistre un nouveau commentaire
     */
    public function storeComment(Request $request, $troc_id)
    {
        if (!Auth::check()) {
            return redirect()->route('CONNEXION')->with('error', 'Connectez-vous pour commenter.');
        }

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Commentaire::create([
            'user_id' => Auth::id(),
            'troc_id' => $troc_id,
            'content' => $request->input('content'),
        ]);

        return back()->with('succes', 'Commentaire ajouté.');
    }

    /**
     * Met à jour un commentaire existant
     */
    public function updateComment(Request $request, $id)
    {
        $comment = Commentaire::findOrFail($id);

        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment->update([
            'content' => $request->input('content'),
        ]);

        return back()->with('succes', 'Commentaire modifié.');
    }

    /**
     * Supprime un commentaire
     */
    public function deleteComment($id)
    {
        $comment = Commentaire::findOrFail($id);

        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        $comment->delete();

        return back()->with('succes', 'Commentaire supprimé.');
    }
}
