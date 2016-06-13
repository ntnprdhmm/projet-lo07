<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Publication;
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
        return response()->json(['accounts' => User::all()], 200);
    }

    public function getDoublons()
    {
        $doublons = Publication::groupBy('titre')->havingRaw('COUNT(*) > 1')->get();

        return response()->json(['doublons' => $doublons], 200);
    }
}
