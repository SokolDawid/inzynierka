<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MDK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!--<link href="img/favicon.ico" rel="icon">-->
        
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

        
    <!-- Template Stylesheet -->
    @vite('resources/css/style.css')

    <!-- Customized Bootstrap Stylesheet -->
    @vite('resources/css/bootstrap.min.css')

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet"></link>
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet"></link>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{ route('welcome') }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>MDK</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('welcome') }}" class="nav-item nav-link">Strona główna</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">O nas</a>
                    <a href="{{ route('classes') }}" class="nav-item nav-link">Zajęcia</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Strony</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('account-update') }}" class="dropdown-item">Aktualizacja danych konta</a>
                            <a href="{{ route('account') }}" class="dropdown-item">Dane konta</a>
                            <a href="{{ route('admin.users.index') }}" class="dropdown-item">Admin - zarządzanie użytkownikami</a>
                            <a href="{{ route('admin-create-user') }}" class="dropdown-item">Admin - stwórz użytkownika</a>
                            <a href="{{ route('password-reset-after-email') }}" class="dropdown-item">Resetowanie hasła po email</a>
                            <a href="{{ route('my-classes') }}" class="dropdown-item">Moje zajęcia</a>
                            <a href="{{ route('class-create') }}" class="dropdown-item">Stwórz nowe zajęcia</a>
                            <a href="{{ route('class-details.show', 1) }}" class="dropdown-item">Szczegóły zajęć</a>
                            <a href="{{ route('class-register-details') }}" class="dropdown-item">Szczegóły zajęć do rejestracji</a>
                            <a href="{{ route('class-managing.index', 1) }}" class="dropdown-item">Nauczyciel - zarządzanie zajęciami</a>
                            <a href="{{ route('presence') }}" class="dropdown-item">Nauczyciel - Sprawdzenie obecności</a>
                            <a href="{{ route('kids.index') }}" class="dropdown-item">Dzieci</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Kontakt</a>
                </div>
                @if (Auth::check()) 
                <!-- Jeśli zalogowany -->
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                        Wyloguj się<i class="fa fa-arrow-right ms-3"></i>
                    </button>
                </form>
                @else
                <!-- Jeśli niezalogowany -->
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                        Dołącz do nas<i class="fa fa-arrow-right ms-3"></i>
                    </a>
                @endif
            </div>
        </nav>

        @if(Route::currentRouteName() === 'welcome')
            <!-- Carousel Start -->
            <div class="container-fluid p-0 mb-5">
                <div class="owl-carousel header-carousel position-relative">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-1.png" alt="">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown mb-4">Najlepsze miejsce do rozwoju umiejętności twojego dziecka</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">Najlepsze miejsce, w którym Twoje dziecko może rozwijać swoje pasje, zdobywać nowe umiejętności i spotykać inspirujących ludzi – idealne do odkrywania talentów i budowania pewności siebie!</p>
                                        <a href="{{ route('about') }}" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Więcej o nas</a>
                                        <a href="{{ route('classes') }}" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Nasze zajęcia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown mb-4">Nie pozwól by talent twojego dziecka się zmarnował</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">Najlepsze miejsce, w którym Twoje dziecko może rozwijać swoje pasje, zdobywać nowe umiejętności i spotykać inspirujących ludzi – idealne do odkrywania talentów i budowania pewności siebie!</p>
                                        <a href="{{ route('about') }}" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Więcej o nas</a>
                                        <a href="{{ route('classes') }}" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Nasze zajęcia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        @else
            @include('partials.header', ['page' => $page ?? 'Error'])
        @endif
        
        @yield('content')

        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Skontaktuj się z nami</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Będzińska 39, Sosnowiec</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1123 123 123</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@mdk.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Przydatne linki</h3>
                        <a class="btn btn-link text-white-50" href="{{ route('about') }}">O nas</a>
                        <a class="btn btn-link text-white-50" href="{{ route('contact') }}">Kontakt</a>
                        <a class="btn btn-link text-white-50" href="{{ route('rodo') }}">Polityka prywatności</a>
                        <a class="btn btn-link text-white-50" href="{{ route('statute') }}">Regulamin</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Lokalizacja</h3>
                            <div class="mapka">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d450.54910984834817!2d19.134740891983395!3d50.29770224556538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716da83f9e846e1%3A0x3ff406cf0f2cb7dd!2sWydzia%C5%82%20Nauk%20%C5%9Acis%C5%82ych%20i%20Technicznych%20%E2%80%93%20Instytut%20Informatyki%2C%20Uniwersytet%20%C5%9Al%C4%85ski!5e0!3m2!1spl!2spl!4v1745332777822!5m2!1spl!2spl" 
                                    style =" width:100%; height:20vh; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Nasi partnerzy</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner1.jpg') }}" alt="Partner 1" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner2.jpg') }}" alt="Partner 2" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner3.jpg') }}" alt="Partner 3" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner4.jpg') }}" alt="Partner 4" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner5.jpg') }}" alt="Partner 5" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="{{ asset('img/partner6.jpg') }}" alt="Partner 6" ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Młodzieżowy Dom Kultury</a>, Wszelkie prawa zastrzeżone. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ route('welcome') }}">Strona główna</a>
                                <a href="{{ route('cookies') }}">Cookies</a>
                                <a href="{{ route('faqs') }}">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    @vite('resources/js/main.js')
</body>

</html>