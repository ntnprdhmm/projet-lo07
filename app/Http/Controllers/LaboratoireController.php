<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Laboratoire;

class LaboratoireController extends Controller
{
    public function getLaboratoires()
    {
        $laboratoires = Laboratoire::all();
        $retour = [];

        foreach ($laboratoires as $laboratoire) {
            $retour[] = $laboratoire->slug;
        }

        return $retour;
    }
}
