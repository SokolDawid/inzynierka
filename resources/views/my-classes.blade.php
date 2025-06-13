@extends('layouts.app')
@section('content')
<!-- My-classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Moje zajęcia</h1>
        </div>
        @forelse($children as $child)
            <div class="mb-5">
                <h3 class="mb-4">
                    {{ $child->FirstName }} {{ $child->LastName }}
                </h3>
                <div class="row g-4">
                    @forelse($classesByChild[$child->ChildID] ?? [] as $class)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="classes-item no-photo">
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="#">{{ $class->Title }}</a>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h6 class="text-primary mb-1">{{ $class->TeacherName }}</h6>
                                                <small>Prowadzący</small>
                                            </div>
                                        </div>
                                        <a href="{{ route('class-details.show', $class->ClassID) }}"
                                           class="bg-primary text-white rounded-pill py-2 px-3 text-decoration-none">
                                           Szczegóły
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>Brak zajęć przypisanych do tego dziecka.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        @empty
            <p class="text-center">Nie znaleziono dzieci przypisanych do Twojego konta.</p>
        @endforelse
    </div>
</div>
<!-- My-classes End -->
@endsection
