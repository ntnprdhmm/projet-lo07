<?php

namespace App\Http\Controllers;

use App\Auteur;
use App\Http\Requests;
use App\Publication;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function accounts(Request $request)
    {
        $users = User::all();
        $scores = [];
        foreach ($users as $user) {
            $score = 0;
            foreach (Auteur::where('user_id', $user['id'])->get() as $_) {
                switch ($_->position) {
                    case 1:
                        $score += 10;
                        break;
                    case 2:
                        $score += 5;
                        break;
                    case 3:
                        $score += 3;
                        break;
                    default:
                        $score += 1;
                }
            }
            $user->score = $score;
        }

        return response()->json(['accounts' => $users], 200);
    }

    public function anomalies()
    {
        $errors = [];
        $publications = Publication::with('auteurs')->get();
        $pubNames = array_count_values((array)collect($publications)->map(function ($x) { return $x->titre; })->all());
        foreach ($pubNames as $titre => $c) {
            if ($c != 1) {
                $errors[] = $titre.': ce titre est dupliqué.';
            }
        }

        foreach ($publications as $pub) {
            $hasUTTAuthor = false;
            $auteurs = $pub->auteurs()->get();
            foreach ($auteurs as $a) {
                if ($a->organisation == 'ICD') {
                    $hasUTTAuthor = true;
                }
            }
            if (!$hasUTTAuthor) {
                $errors[] = '#'.$pub->id.' '.$pub->titre.' n\'a pas d\'auteur à l\'UTT.';
            }

            // Detect duplicate authors
            $auteursCount = array_count_values($auteurs->map(function ($a) { return $a->nom.$a->prenom; })->all());
            foreach ($auteursCount as $v => $c) {
                if ($c != 1) {
                    $errors[] = '#'.$pub->id.' '.$pub->titre.': Auteur #'.$v.' présent '.$c.' fois !';
                }
            }
        }
    }
}
