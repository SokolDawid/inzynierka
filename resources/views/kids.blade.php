@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Moje dzieci</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Formularz dodawania dziecka -->
    <div class="card mb-4">
        <div class="card-header">Dodaj nowe dziecko</div>
        <div class="card-body">
            <form method="POST" action="{{ route('kids.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Imię</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nazwisko</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Data urodzenia</label>
                        <input type="date" name="birth_date" class="form-control" required>
                    </div>
                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-success">Dodaj dziecko</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Lista dzieci -->
    <h4>Twoje dzieci:</h4>
    @if($kids->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Data urodzenia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kids as $kid)
                    <tr>
                        <td>{{ $kid->FirstName }}</td>
                        <td>{{ $kid->LastName }}</td>
                        <td>{{ \Carbon\Carbon::parse($kid->BirthDate)->format('d.m.Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nie dodałeś jeszcze żadnego dziecka.</p>
    @endif
</div>
@endsection