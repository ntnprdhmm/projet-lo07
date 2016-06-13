<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate(
            $request, [
                'login' => 'required|unique:users|max:255',
                'name' => 'required|max:255',
                'firstname' => 'required|max:255',
                'password' => 'required',
                'labo' => 'required|max:255',
                'organisation' => 'required|max:255',
            ]
        );
        $user = new User();
        $user->login = $request->input('login');
        $user->nom = $request->input('name');
        $user->prenom = $request->input('firstname');
        $user->password = bcrypt($request->input('password'));
        $user->organisation = 'UTT'; // $request->input('organisation');
        $user->laboratoire = $request->input('labo');
        $user->save();

        Auth::login($user);

        return response()->redirectToIntended('/');
    }

    public function login(Request $request)
    {
        $this->validate(
            $request, [
                'login' => 'required|max:255',
                'password' => 'required',
            ]
        );
        $login = $request->input('login');
        $password = $request->input('password');
        if (Auth::attempt(['login' => $login, 'password' => $password])) {
            return response()->redirectToIntended('/');
        } else {
            abort(403, 'Wrong username/password :-(');
        }
    }

    public function me()
    {
        $me = json_encode(Auth::user());

        return "app.value('me', $me);";
    }
}
