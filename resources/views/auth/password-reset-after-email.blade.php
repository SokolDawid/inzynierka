@extends('layouts.app')
    @section('content')
        <!-- Reset password after email Start -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-light p-5 rounded shadow">
                        <h2 class="mb-4 text-center font-secondary">Ustaw nowe hasło</h2>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ request('token') }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adres E-mail</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                       value="{{ request('email') ?? old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Nowe hasło</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Potwierdź hasło</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Zmień hasło</button>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="text-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">Powrót do logowania</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset password after email End -->
    @endsection