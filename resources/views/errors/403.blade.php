@extends('layouts.app')
    @section('content')
        <!-- 403 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">403</h1>
                        <h1 class="mb-4">Brak dostępu</h1>
                        <p class="mb-4">Przepraszamy, nie masz uprawnień do przeglądania tej strony. Wróć na stronę główną, aby kontynuować przeglądanie.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('welcome') }}">Wróć do strony głównej</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 403 End -->
    @endsection