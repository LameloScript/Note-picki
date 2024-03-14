<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    // Méthode pour afficher la vue des notes
    public function index()
{
    // Récupérer toutes les notes depuis la base de données
    $notes = Note::all();

    // Retourner la vue des notes avec les données des notes
    return view('notes.index', compact('notes'));
}

    // Méthode pour enregistrer une nouvelle note
    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        // Créer une nouvelle note dans la base de données
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Rediriger l'utilisateur vers la page des notes avec un message de succès
        return redirect()->route('notes.index')->with('success', 'Note ajoutée avec succès !');
    }
}
