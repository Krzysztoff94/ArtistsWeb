@extends('layout') <!-- Twój bazowy layout -->
@section('title', 'Logowanie') <!-- Tytuł strony -->

@section('content') <!-- Sekcja z zawartością strony -->
<div class="login-container">
    <h1>Zaloguj się</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Adres e-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Zaloguj się</button>
    </form>
    <p>Nie masz konta? <a href="/register">Zarejestruj się</a></p>
</div>
@endsection
