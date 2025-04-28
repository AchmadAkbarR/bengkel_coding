@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}" class="form-auth">
        @csrf
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" class="btn-submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
@endsection