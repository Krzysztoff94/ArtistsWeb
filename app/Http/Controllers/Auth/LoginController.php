<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Walidacja danych logowania
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Próba zalogowania użytkownika
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // Po zalogowaniu przekierowanie na stronę główną
        }

        // W przypadku nieudanej próby
        return back()->withErrors([
            'email' => 'Podane dane są nieprawidłowe.',
        ]);
    }
}
