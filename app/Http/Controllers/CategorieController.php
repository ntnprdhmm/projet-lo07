<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests;

class CategorieController extends Controller
{
    public function getCategories()
    {
        return Categorie::all();
    }
}
