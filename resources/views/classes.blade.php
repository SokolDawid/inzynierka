@extends('layouts.app')
@section('content')
<!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Zajęcia</h1>
            <p>Oto nasza oferta zajęć, które znajdziesz w MDK. Proponujemy szeroki wybór kursów i warsztatów, dostosowanych do różnych zainteresowań i grup wiekowych.</p>
        </div>
        <div class="row g-4">
            @foreach ($classes as $class)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('img/') }}/{{ $class->MainPhoto }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="#">{{ $class->Title }}</a>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">{{ $class->TeacherName }}</h6>
                                    <small>Prowadzący</small>
                                </div>
                            </div>
                            <a href="{{ route('class.register.details', $class->ClassID) }}" class="bg-primary text-white rounded-pill py-2 px-3 text-decoration-none">Szczegóły</a>
                        </div>
                        <div class="row g-1 mt-3">
                            <div class="col-6">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Chętnych:</h6>
                                    <small>{{ $class->CurrentAttendees }} Osób</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Ilość miejsc:</h6>
                                    <small>{{ $class->MaxAttendees }} Osób</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Classes End -->
@endsection
