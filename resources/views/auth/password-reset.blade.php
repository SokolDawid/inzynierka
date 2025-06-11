@extends('layouts.app')
    @section('content')
        <!-- Remid-password Start -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-light p-5 rounded shadow">
                        <h2 class="mb-4 text-center font-secondary">Wyślij link do resetu hasła</h2>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Adres E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Wyślij link resetujący</button>
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
        <!-- Remind-password End -->
    @endsection