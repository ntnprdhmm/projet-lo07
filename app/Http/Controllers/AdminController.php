<?php

namespace App\Http\Controllers;

use App\Auteur;
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
}
