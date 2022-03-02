<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'Tel' => 'required',
            'password' => 'required',
            //'password_token' => 'required|confirmed',
            'role' => 'required',
        ]);


        $user = User::create(request(['name', 'email', 'Tel', 'password', 'password_token','role']));

        auth()->login($user);
        return redirect()->to('/');
    }

}
