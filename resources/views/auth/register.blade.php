@extends('layout')
@section('title', 'Rejestracja')

@section('content')
<div class="register-container">
    <h1>Rejestracja</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Potwierdź hasło:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Zarejestruj się</button>
    </form>
</div>
@endsection
