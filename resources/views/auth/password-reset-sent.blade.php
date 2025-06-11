@extends('layouts.app')
    @section('content')
        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">Resetowanie hasła</h1>
                        <p class="mb-4">Link do ustawienia nowego hasła został wysłany na twój e-mail! Wróć na stronę główną, aby kontynuować przeglądanie.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('welcome') }}">Wróć do strony głównej</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->
    @endsection