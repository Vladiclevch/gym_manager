<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $reguest) {
        return view("register");
    }

    public function registerCreate(Request $reguest) {
        User::create($reguest->only(["name", "email", "password"]));
        return redirect("login");
    }
}
