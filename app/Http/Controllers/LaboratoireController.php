<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratoire;
use App\Http\Requests;

class LaboratoireController extends Controller
{
    public function getLaboratoires()
    {
        $laboratoires = Laboratoire::get();
        $retour = array();

        foreach($laboratoires as $laboratoire)
        {
            array_push($retour, $laboratoire->slug);
        }

        return $retour;
    }
}
