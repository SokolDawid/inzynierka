@extends('layouts.app')
    @section('content')
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="bg-light p-5 rounded shadow">
                        <h2 class="mb-4 text-center font-secondary">Formularz nowych zajęć</h2>

                        <form method="POST" action="{{ route('class.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nazwa zajęć</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Opis zajęć</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Zdjęcie</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="capacity" class="form-label">Liczba miejsc</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity" min="1" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="max_total_registrations" class="form-label">Maksymalna liczba zapisanych</label>
                                    <input type="number" class="form-control" id="max_total_registrations" name="max_total_registrations" min="1" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="weekday" class="form-label">Dzień tygodnia</label>
                                    <select class="form-control" id="weekday" name="weekday" required>
                                        <option value="">Wybierz dzień</option>
                                        <option value="Poniedziałek">Poniedziałek</option>
                                        <option value="Wtorek">Wtorek</option>
                                        <option value="Środa">Środa</option>
                                        <option value="Czwartek">Czwartek</option>
                                        <option value="Piątek">Piątek</option>
                                        <option value="Sobota">Sobota</option>
                                        <option value="Niedziela">Niedziela</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="time_start" class="form-label">Godzina rozpoczęcia zajęć</label>
                                    <input type="time" class="form-control" id="time_start" name="time_start" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="time_end" class="form-label">Godzina zakończenia zajęć</label>
                                    <input type="time" class="form-control" id="time_end" name="time_end" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="enrollment_start" class="form-label">Początek rekrutacji</label>
                                    <input type="datetime-local" class="form-control" id="enrollment_start" name="enrollment_start" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="enrollment_end" class="form-label">Koniec rekrutacji</label>
                                    <input type="datetime-local" class="form-control" id="enrollment_end" name="enrollment_end" required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Dodaj zajęcia</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Account-Edit End -->
    @endsection