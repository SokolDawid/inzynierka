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
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner1.jpg" alt="Partner 1" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner2.jpg" alt="Partner 2" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner3.jpg" alt="Partner 3" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner4.jpg" alt="Partner 4" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner5.jpg" alt="Partner 5" ></a>
                            </div>
                            <div class="col-4">
                                <a href=""><img class="img-fluid rounded bg-light p-1" src="img/partner6.jpg" alt="Partner 6" ></a>
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