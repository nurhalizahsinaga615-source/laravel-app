@extends('layouts.app')

@section('content')
<style>
   
    :root {
        --bg1: #b7c9ff; --bg2: #ffd9f0; --bg3: #f4d8ff;
        --ink: #24324a; --muted: #6b7280;
        --card: rgba(255, 255, 255, 0.85);
        --primary: #70a7ff; --primary2: #ff8cb3;
    }


    body {
        background: linear-gradient(135deg, var(--bg1) 0%, var(--bg3) 45%, var(--bg2) 100%) !important;
        min-height: 100vh;
    }

   
    nav.navbar { display: none !important; }

    .main-wrapper {
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auth-card {
        background: var(--card);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 2px solid white;
        border-radius: 30px;
        padding: 40px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.1);
        text-align: center;
    }

    .auth-brand {
        font-size: 32px;
        font-weight: 800;
        color: var(--ink);
        margin-bottom: 5px;
    }

    .auth-subtitle {
        color: var(--muted);
        font-size: 14px;
        margin-bottom: 30px;
    }

    .form-control {
        border-radius: 15px !important;
        padding: 12px 20px !important;
        border: 1px solid rgba(0,0,0,0.1) !important;
        background: white !important;
    }

    .form-control:focus {
        border-color: var(--primary) !important;
        box-shadow: 0 0 0 0.25rem rgba(112, 167, 255, 0.25) !important;
    }

    .btn-gemess {
        background: linear-gradient(90deg, var(--primary), var(--primary2)) !important;
        border: none !important;
        color: white !important;
        font-weight: 700 !important;
        padding: 12px !important;
        border-radius: 15px !important;
        transition: 0.3s !important;
        width: 100%;
    }

    .btn-gemess:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(255, 140, 179, 0.3);
    }

    .auth-link {
        color: var(--primary2);
        text-decoration: none;
        font-weight: 600;
    }
</style>

<div class="main-wrapper">
    <div class="auth-card">
        <div class="auth-brand">NyeblakYuk! 🍜</div>
        <p class="auth-subtitle"></p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3 text-start">
                <label class="form-label fw-bold small ps-2">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="nama@email.com">
                @error('email')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3 text-start">
                <label class="form-label fw-bold small ps-2">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="******">
                @error('password')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="d-flex justify-content-between mb-4 px-2">
                <div class="form-check small">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Ingat Saya</label>
                </div>
                <a href="{{ route('password.request') }}" class="auth-link small">Lupa Password?</a>
            </div>

            <button type="submit" class="btn btn-gemess">
                Masuk Sekarang ✨
            </button>
        </form>

        <div class="mt-4 small pt-3 border-top">
            Belum punya akun? <a href="{{ route('register') }}" class="auth-link">Daftar Sini</a>
        </div>
    </div>
</div>
@endsection