@extends('layouts.app')
    @section('content')
        <!-- Admin create user Start -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="bg-light p-5 rounded shadow">
                        <h2 class="mb-4 text-center font-secondary">Formularz nowego użytkownika</h2>

                        <form method="POST" action="{{ route('admin-create-user.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">Imię</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Nazwisko</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Numer telefonu</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone_secondary" class="form-label">Numer telefonu drugiego opiekuna (opcjonalnie)</label>
                                <input type="tel" class="form-control" id="phone_secondary" name="phone_secondary" value="{{ old('phone_secondary') }}">
                                @error('phone_secondary')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="role" class="form-label">Rola</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Użytkownik</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrator</option>
                                    <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Nauczyciel</option>
                                </select>
                                @error('role')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="alert alert-info">
                                Hasło zostanie ustawione osobno przez użytkownika poprzez link resetujący wysłany na e-mail.
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Utwórz użytkownika</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Admin create user End -->
    @endsection