<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="bg-light p-5 rounded shadow">
                <h2 class="mb-4 text-center font-secondary">Utwórz konto</h2>

                <form wire:submit.prevent="register">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">Imię opiekuna</label>
                            <input type="text" class="form-control" wire:model="first_name" id="first_name">
                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Nazwisko opiekuna</label>
                            <input type="text" class="form-control" wire:model="last_name" id="last_name">
                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" wire:model="email" id="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Numer telefonu opiekuna</label>
                        <input type="text" class="form-control" wire:model="phone" id="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_secondary" class="form-label">Numer telefonu zapasowego opiekuna (opcjonalnie)</label>
                        <input type="text" class="form-control" id="phone_secondary" name="phone_secondary" maxlength="20">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Hasło</label>
                        <input type="password" class="form-control" wire:model="password" id="password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Powtórz hasło</label>
                        <input type="password" class="form-control" wire:model="password_confirmation" id="password_confirmation">
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Zarejestruj się</button>
                    </div>
                </form>

                <hr class="my-4">
                <div class="text-center">
                    <span>Masz już konto?</span>
                    <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Zaloguj się</a>
                </div>
            </div>
        </div>
    </div>
</div>