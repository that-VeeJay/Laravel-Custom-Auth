<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate form
        $validatedAttrs = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', Password::min(3), 'confirmed']
        ]);

        // create user in the database
        $user = User::create($validatedAttrs);

        // log in 
        // Auth::login($user);

        // redirect
        return redirect()->route('welcome');
    }
}
