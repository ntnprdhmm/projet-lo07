<?php

namespace App\Http\Controllers;

use App\Auteur;
use App\Categorie;
use App\Http\Requests;
use App\Publication;
use App\User;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function getPublications()
    {
        $publications = Publication::with('categorie', 'auteurs')->get();

        return $publications;
    }

    public function addPublications(Request $request)
    {
        $this->validate(
            $request, [
                'title' => 'required|max:255',
                'annee' => 'required',
                'category' => 'required',
                'authors' => 'required',
            ]
        );
        $categorie = Categorie::findOrFail($request->input('category'));

        $pub = new Publication();

        if (in_array($categorie->slug, ['CI', 'CF'])) {
            $this->validate(
                $request, [
                    'conference' => 'required|max:255',
                ]
            );
            $pub->label = $request->input('conference');
        }
        // $pub->label = $request->input('label');
        $pub->titre = $request->input('title');
        $pub->categorie = $categorie;

        $pub->save(); // Save before users to have an ID

        $auteurs = array_map(function ($v) { return trim($v); }, explode(',', $request->input('authors')));
        $pos = 0;
        foreach ($auteurs as $_) {
            $parts = explode(' ', $_);
            $user = User::whereIn('nom', $parts)->whereIn('prenom', $parts)->first();
            // ^ Laid, mais permet une certaine flexibilité pour l'utilisateur
            // Ne fonctionne pas avec "Jean Jean", mais ... cas trop rare pour mériter mon attention

            if ($user == null) {
                $user = User::create(['nom' => $_, 'prenom' => '']);
            }
            Auteur::create(['publication_id' => $pub->id, 'user_id' => $user->id, 'position' => ++$pos]);
        }

        return response()->json(['status' => 'success'], 200);
    }
}
