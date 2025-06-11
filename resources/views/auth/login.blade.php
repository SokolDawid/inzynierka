@extends('layouts.app')

@section('content')
    <!-- Login Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
                <div class="bg-light p-5 rounded shadow">
                    <h2 class="mb-4 text-center font-secondary">Zaloguj się</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Adres Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">Hasło</label>
                            <input type="password" class="form-control @error('email') is-invalid @enderror"
                                   id="password" name="password" required>
                        </div>

                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <a href="{{ route('password-reset') }}" class="text-decoration-none small text-muted">Zapomniałeś hasła?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Zaloguj</button>
                        </div>
                    </form>

                    <hr class="my-4">

                    <div class="text-center">
                        <span>Nie masz konta?</span>
                        <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
@endsection
