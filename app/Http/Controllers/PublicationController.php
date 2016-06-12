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

    public function addPublications(Request $request)
    {
        $this->validate(
            $request, [
                'title' => 'required|max:255',
                // 'annee' => 'required',
                // 'lieu' => 'required|max:255',
                // 'label' => 'required|max:255',
                'category' => 'required',
                'authors' => 'required',
            ]
        );
        $categorie = Categorie::where(['name' => $request->input('category')])->findOrFail();

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
        // $pub->annee = $request->input('annee');
        $auteurs = array_map(function ($v) { return trim($v); }, explode(',', $request->input('annee')));
        $pub->categorie = $categorie;
        var_dump($auteurs, $pub);
        die();
        $pub->save();

        return response()->json(['status' => 'success'], 200);
    }
}
