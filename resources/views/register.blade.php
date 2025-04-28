@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}" class="form-auth">
        @csrf
        <input type="text" name="name" placeholder="Nama" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br>
        <button type="submit" class="btn-submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection