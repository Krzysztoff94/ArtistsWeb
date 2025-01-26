@extends('layout')
@section('title', 'Logowanie')

@section('content')
@vite('resources/css/login.css')
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
    <p>Nie masz konta? <a href="{{ route('register') }}">Zarejestruj sie</a></p>
</div>
@endsection
