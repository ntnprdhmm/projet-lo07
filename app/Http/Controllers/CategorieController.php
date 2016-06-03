<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Http\Requests;

class CategorieController extends Controller
{
    public function getCategories()
    {
        $categories = Categorie::get();
        $retour = array();

        foreach($categories as $categorie)
        {
            array_push($retour, $categorie->slug." : ".$categorie->name);
        }

        return $retour;
    }
}
