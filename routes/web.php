<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GymMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::get('/home', function () {
    return view('home');

});

Route::prefix('auth')->group(function() {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::get('/gym-member/create', [GymMemberController::class, 'create'])->name('add-member');
Route::post('/gym-member/', [GymMemberController::class, 'store'])->name('gym-members.store');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
