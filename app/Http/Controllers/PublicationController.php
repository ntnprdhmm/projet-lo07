<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests;
use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function getPublications()
    {
        $publications = Publication::with('categorie', 'auteurs')->get();

        return $publications;
    }

    public function create(Request $request)
    {
        $this->validate(
            $request, [
                'titre' => 'required|max:255',
                'annee' => 'required',
                'lieu' => 'required|max:255',
                'label' => 'required|max:255',
                'categorie_id' => 'required',
            ]
        );
        $categorie = Categorie::findOrFail($request->input('categorie_id'));
        $pub = new Publication();
        $pub->label = $request->input('label');
        $pub->titre = $request->input('titre');
        $pub->annee = $request->input('annee');
        $pub->categorie = $categorie;
        $pub->save();

        return response()->json(['status' => 'success'], 200);
    }
}
