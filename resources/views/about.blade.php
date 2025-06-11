@extends('layouts.app')
    @section('content')
        <!-- About us Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">O nas</h1>
                        <p class="mb-4">Młodzieżowy Dom Kultury to wyjątkowe miejsce, które daje młodym ludziom szansę na rozwój ich pasji i talentów. Oferujemy szeroką gamę zajęć artystycznych, sportowych oraz edukacyjnych, które pomagają młodzieży odkrywać swoje zainteresowania i rozwijać umiejętności w różnych dziedzinach. Niezależnie od tego, czy ktoś chce malować, tańczyć, grać na instrumencie, czy rozwijać swoje zdolności sportowe, u nas znajdzie odpowiednią przestrzeń do działania.</p>
                        <p class="mb-4">Nasza kadra to wykwalifikowani nauczyciele i instruktorzy, którzy z zaangażowaniem i pasją przekazują swoją wiedzę oraz wspierają młodych ludzi w dążeniu do ich celów. Dzięki indywidualnemu podejściu do każdego ucznia, staramy się dostosować programy zajęć do ich potrzeb i możliwości, tworząc jednocześnie przyjazną i inspirującą atmosferę. W Młodzieżowym Domu Kultury każdy może poczuć się doceniony, a jednocześnie ma szansę na rozwój w otoczeniu rówieśników, którzy podzielają podobne pasje.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="img-fluid rounded" src="img/team-photo.jpg" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
        <!-- About us End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Nasza kadra</h1>
                    <p>Poznaj nasz zespół nauczycieli, którzy z pasją i zaangażowaniem prowadzą zajęcia. Każdy z nich posiada doświadczenie i indywidualne podejście, aby wspierać rozwój uczniów na każdym etapie nauki.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-1.jpg" alt="">
                            <div class="team-text">
                                <p>Dyrektor</p>
                                <h5>Magdalena Wójcik</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@mdk.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-2.jpg" alt="">
                            <div class="team-text">
                                <p>Zastępca dyrektora</p>
                                <h5>Sebastian Chmura</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@example.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-3.jpg" alt="">
                            <div class="team-text">
                                <p>Teatr</p>
                                <h5>Alicja Kowalczyk</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@example.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-1.jpg" alt="">
                            <div class="team-text">
                                <p>Język Angielski</p>
                                <h5>Agata Zielińska</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@mdk.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-2.jpg" alt="">
                            <div class="team-text">
                                <p>Plastyka</p>
                                <h5>Wiktor Grzyb</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@mdk.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/teacher-3.jpg" alt="">
                            <div class="team-text">
                                <p>Muzyka</p>
                                <h5>Klementyna Kamińska</h5>
                                <a class="btn btn-square btn-primary mx-1" href="mailto:adres@mdk.com"><i class="fa fa-at"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    @endsection