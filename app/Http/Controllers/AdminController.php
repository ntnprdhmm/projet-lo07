<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        return response()->json(['accounts' => User::all()], 200);
    }
}
