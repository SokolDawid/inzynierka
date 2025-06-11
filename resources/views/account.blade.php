@extends('layouts.app')
@section('content')
    <!-- Account Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-light p-5 rounded shadow">
                    <h2 class="mb-4 text-center font-secondary">Dane konta</h2>

                    <dl class="row">
                        <dt class="col-sm-4">Imię</dt>
                        <dd class="col-sm-8">{{ $user->FirstName ?? '-' }}</dd>

                        <dt class="col-sm-4">Nazwisko</dt>
                        <dd class="col-sm-8">{{ $user->LastName ?? '-' }}</dd>

                        <dt class="col-sm-4">E-mail</dt>
                        <dd class="col-sm-8">{{ $user->email }}</dd>

                        <dt class="col-sm-4">Numer telefonu</dt>
                        <dd class="col-sm-8">{{ $user->PhoneNumber ?? '-' }}</dd>

                        <dt class="col-sm-4">Numer telefonu drugiego opiekuna</dt>
                        <dd class="col-sm-8">{{ $user->PhoneNumberSecondary ?? '-' }}</dd>
                    </dl>

                    @php
                        $authUser = Auth::user();
                    @endphp

                    @if ($authUser && $authUser->UserID === $user->UserID)
                        <div class="d-grid">
                            <a href="{{ route('account-update') }}" class="btn btn-primary btn-lg">Edytuj dane</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Account End -->
@endsection
