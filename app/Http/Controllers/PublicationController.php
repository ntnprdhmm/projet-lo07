<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Http\Requests;

class PublicationController extends Controller
{
    public function getPublications()
    {
        $publications = Publication::with('categorie', 'auteurs')
                        ->get();

        return $publications;
    }
}
