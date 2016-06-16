<?php

namespace App\Http\Controllers;

use App\Auteur;
use App\Categorie;
use App\Http\Requests;
use App\Publication;
use App\User;
use DB;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function getPublications()
    {
        $publications = Publication::with('categorie', 'auteurs')->get();

        return $publications;
    }

    public function updatePublications(Request $request)
    {
        $publication = Publication::findOrFail($request->input('id'));

        $publication->nb_update = $publication->nb_update + 1;
        $publication->save();

        return response()->json(['publication' => $publication], 200);
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
        $pub->annee = $request->input('annee');
        $pub->titre = $request->input('title');
        $pub->categorie_id = $categorie->slug;

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

    public function getCollaborateurs($id)
    {
        return DB::select(
            '
SELECT `nom`, `prenom`, COUNT(`auteurs`.`id`) AS collaborations
FROM `auteurs`
RIGHT JOIN `users` ON `users`.`id`=`auteurs`.`user_id`
WHERE `publication_id` IN (SELECT `publication_id` FROM `auteurs` WHERE `user_id` = ?)

GROUP BY `user_id`
ORDER BY COUNT(`auteurs`.`id`) DESC
', [$id]
        );
    }

    public function requetesDemo()
    {
        // Liste des publications présente dans la base dans l'ordre chronologique (ordonnée par catégorie et par année
        $liste = DB::table('publications')
            ->orderBy('annee', 'asc')
            ->orderBy('categorie_id', 'asc')
            ->get();

        // Liste des publications pour un laboratoire donné et à partir d'une année donnée (donc formulaire avec deux paramètres)
        $liste = Publication::find('annee', $request->input('annee'))
            ->where('laboratoire', $request->input('labo'))
            ->get();
        // Liste des publications d'un chercheur donné (ordonnée par catégorie et par année)
        $liste = DB::table('publications')
            ->orderBy('annee', 'asc')
            ->orderBy('categorie_id', 'asc')
            ->get();
        //Liste des collaborations extérieures à l'UTT d'un chercheur donné.
        //Liste des co-auteurs d'un chercheur donné ordonnée par nombre de co-publications décroissante.

    }
}
