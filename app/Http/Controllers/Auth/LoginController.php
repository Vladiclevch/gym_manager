<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $reguest) {
        return view("login");
    }

    public function authentication(Request $reguest) {
        $arr = $reguest->only(["email", "password"]);
        Auth::attempt($arr);
        return redirect("home");
    }

    public function logout(Request $reguest) {
        Auth::logout();
        return redirect("home");
    }
}
