<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{



    public function view()
    {
        return view('login');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/');
        } else {

            return back()->with('fail', 'Anmeldung fehlgeschlagen');
        }
    }
}
