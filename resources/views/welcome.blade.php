@extends('layouts.app')
    @section('content')
        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Rozwijaj talenty z nami</h1>
                    <p>W naszym ośrodku oferujemy szeroki wybór zajęć, które rozweselą, zainspirują i wzbogacą Twoje dziecko – od nauki śpiewu i gry na instrumentach, przez aktorstwo, aż po kursy językowe i artystyczne warsztaty. Każdy znajdzie coś dla siebie!</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-music fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Rozwój muzyczny</h3>
                                <p class="mb-0">Zajęcia muzyczne, które rozweselą duszę, nauczą gry na instrumentach oraz pozwolą odkryć tajniki śpiewu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-theater-masks fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Aktorstwo</h3>
                                <p class="mb-0">Zajęcia aktorskie, które rozweselą, nauczą wyrazu i pomogą pewniej wyrażać siebie na scenie oraz w życiu codziennym.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-comments fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Nauka języków</h3>
                                <p class="mb-0">Kursy językowe, które otworzą drzwi do nowych kultur i pozwolą płynnie porozumiewać się w obcym języku.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-palette fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Artystyczne</h3>
                                <p class="mb-0">Warsztaty artystyczne, które pobudzą kreatywność i pozwolą na swobodne wyrażenie siebie poprzez sztukę.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Wybierz zajęcia dla swojego dziecka</h1>
                                <p class="mb-4">U nas każde dziecko znajdzie coś dla siebie – śpiew, teatr, języki, rysunek i wiele więcej! Sprawdź, co może je zaciekawić i zapisz je na zajęcia, które rozwiną jego pasje.</p>
                                <a class="btn btn-primary py-3 px-5" href="{{ route('classes') }}">Sprawdź dostępne zajęcia<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->

        
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Dowiedz się więcej o naszej pracy i naszych działaniach kulturalnych</h1>
                        <p>Młodzieżowy Dom Kultury to miejsce, w którym dzieci i młodzież mogą rozwijać swoje talenty, odkrywać pasje i budować pewność siebie w przyjaznej atmosferze. Oferujemy bogaty wybór zajęć artystycznych, językowych, muzycznych i teatralnych, prowadzonych przez wykwalifikowanych i pełnych pasji instruktorów.</p>
                        <p class="mb-4">Tworzymy przestrzeń pełną inspiracji, wsparcia i dobrej energii – tu każdy może poczuć się swobodnie i znaleźć coś dla siebie. Chcesz wiedzieć więcej? Poznaj nas bliżej!</p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('about') }}">Więcej o nas</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="img/teacher-2.jpg" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Adam Małysz</h6>
                                        <small>Dyrektor</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.png" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Masz pytania? Napisz do nas</h1>
                                <form method="POST" action="{{ route('welcome.send') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="guardian_name" class="form-control border-0" id="gname" placeholder="Imię opiekuna" required>
                                                <label for="gname">Imię opiekuna</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control border-0" id="gmail" placeholder="Email" required>
                                                <label for="gmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="child_name" class="form-control border-0" id="cname" placeholder="Imię dziecka" required>
                                                <label for="cname">Imię dziecka</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="child_age" class="form-control border-0" id="cage" placeholder="Wiek dziecka" required>
                                                <label for="cage">Wiek dziecka</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="message" class="form-control border-0" placeholder="Treść wiadomości" id="message" style="height: 100px" required></textarea>
                                                <label for="message">Treść wiadomości</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Wyślij</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
    @endsection
