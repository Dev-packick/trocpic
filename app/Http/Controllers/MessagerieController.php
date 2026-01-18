<?php

namespace App\Http\Controllers;

use App\Models\Messagerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagerieController extends Controller
{
    // Accéder à la page d'affichage des Messages
    public function lire()
    {
        $userId = Auth::user()->id;

        // On récupère les messages les plus récents par troc_id et sender
        $messages = Messagerie::with('sender')
            ->where('recever_id', $userId)
            ->orderByDesc('created_at')
            ->get()
            ->unique(fn ($msg) => $msg->troc_id . '-' . $msg->sender_id);

        return view('Admin.messagerie', compact('messages'));
    }



    public function envoyer(Request $request)
    {
        $this->validate($request, [
            'message' => 'required|string',
            'troc_id' => 'required|exists:trocs,id',
            'recever_id' => 'required|exists:users,id',
        ]);

        $message = new Messagerie();
        $message->message = $request->input('message');
        $message->sender_id = Auth::user()->id;
        $message->recever_id = $request->input('recever_id');
        $message->troc_id = $request->input('troc_id');
        $message->save();

        return response()->json([
            'code' => 1,
            'msg' => 'Message envoyé avec succès.'
        ]);
    }

    

    // Supprimer un message
    public function destroySms($id)
    {
        $message = Messagerie::find($id);
        if (!$message) {
            return back()->with('error', 'Le message que vous essayez de supprimer n\'existe pas.');
        }

        $message->delete();
        return back()->with("success", "Message supprimé avec succès.");
    }
}
