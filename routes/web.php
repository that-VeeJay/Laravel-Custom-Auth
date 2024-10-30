<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;

Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'home')->name('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegistrationController::class, 'create'])->name('register');
    Route::get('/login', [SessionController::class, 'create'])->name('login');
});

// Register
Route::post('/register', [RegistrationController::class, 'store']);

// Login
Route::post('/login', [SessionController::class, 'store']);

// Login
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');