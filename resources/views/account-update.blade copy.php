@extends('layouts.app')
    @section('content')
        <!-- Account-Edit Start -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="bg-light p-5 rounded shadow">
                        <h2 class="mb-4 text-center font-secondary">Zaktualizuj dane konta</h2>
                        <form method="POST" action="{{ route('account-update') }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">Imię</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Nazwisko</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                    
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Numer telefonu</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                
                            </div>

                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Data urodzenia</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                                
                            </div>

                            <hr>
                            <h5 class="mb-3">Zmiana hasła</h5>

                            <div class="mb-3">
                                <label for="password" class="form-label">Nowe hasło</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Powtórz nowe hasło</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Zapisz zmiany</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account-Edit End -->
    @endsection