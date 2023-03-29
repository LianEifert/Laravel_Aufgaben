<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        $request = request();





        $request->validate(
            [
                'name' => 'required|max:25',
                'lastname' => 'required|max:25',
                'email' => 'required|email',
                'password' => 'required|max:255|min:5',
            ],

        );

        $user = new User();
        $passwordUnhashed = $request->get('password');
        $user->name = $request->get('name');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->password = Hash::make($passwordUnhashed);
        $user->save();

        return redirect('/');
    }

    public function show()
    {
        return view('register');
    }
}
