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
                            <a href="{{ route('class-details') }}" class="dropdown-item">Szczegóły zajęć</a>
                            <a href="{{ route('class-register-details') }}" class="dropdown-item">Szczegóły zajęć do rejestracji</a>
                            <a href="{{ route('class-managing.index', 1) }}" class="dropdown-item">Nauczyciel - zarządzanie zajęciami</a>
                            <a href="{{ route('presence') }}" class="dropdown-item">Nauczyciel - Sprawdzenie obecności</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Kontakt</a>
                </div>
                @if (Auth::check()) 
                <!-- zalogowany -->
                <a href="{{ route('logout') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                    Wyloguj się<i class="fa fa-arrow-right ms-3"></i>
                </a>
                @else
                <!-- Jeśli niezalogowany -->
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
                        Dołącz do nas<i class="fa fa-arrow-right ms-3"></i>
                    </a>
                @endif
            </div>
        </nav>