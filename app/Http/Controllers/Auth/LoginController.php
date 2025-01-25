<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    protected $redirectedTo = '/home';

    public function login() {
        return view("login");
    }

    public function authentication(Request $request) {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if(Auth::attempt($validated)) {
            return redirect()->intended($this->redirectedTo);
        }

        return back()->withErrors([
            'auth' => 'Email or password do not match'
        ])->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect("home");
    }
}
