@extends('layouts.guest')

@section('title', 'Selamat Datang')

@section('content')
    <h1>Selamat Datang!</h1>
    <div class="auth-links">
        <a href="{{ route('login') }}" class="btn-link">Login</a>
        <a href="{{ route('register') }}" class="btn-link">Register</a>
    </div>
@endsection