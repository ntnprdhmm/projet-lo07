<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
	public function __construct() {
		$this->middleware('admin');
	}

	public function accounts(Request $request){		
		return response()->json(['accounts' => User::all()], 200);
	}
}
