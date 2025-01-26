<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//login
use App\Http\Controllers\Auth\LoginController;
Route::post('/login', [LoginController::class, 'login'])->name('login');

//register
use App\Http\Controllers\Auth\RegisterController;
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


