@extends('layouts.app')
    @section('content')
        <!-- Class-details Start -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="bg-light p-5 rounded shadow">
                        <div class="text-center mb-4">
                            <h2 class="mb-3">{{ $class->Title }}</h2>
                        </div>
                        <hr>

                        <h4 class="mt-4 mb-3">Harmonogram zajęć</h4>
                        <ul class="list-group mb-4">
                            <li class="list-group-item">
                                <strong>{{ $class->weekday }}</strong>,
                                {{ \Carbon\Carbon::parse($class->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($class->end_time)->format('H:i') }}
                            </li>
                        </ul>

                        <hr class="my-5">

                        <h4 class="mt-4 mb-3">Moja obecność</h4>
                        <ul class="list-group">
                            @forelse($attendance as $lesson)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>
                                        {{ \Carbon\Carbon::parse($lesson->Date)->translatedFormat('l, d.m.Y') }}
                                    </span>
                                    @if($lesson->Attendance === 'Present')
                                        <span class="badge bg-success">Obecny</span>
                                    @elseif($lesson->Attendance === 'Absent')
                                        <span class="badge bg-primary">Nieobecny</span>
                                    @else
                                        <span class="badge bg-secondary">Brak danych</span>
                                    @endif
                                </li>
                            @empty
                                <li class="list-group-item text-center">Brak danych o obecności.</li>
                            @endforelse
                        </ul>
                        <div class="mt-4">
                            {{ $attendance->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>

                        <div class="d-grid mt-4">
                            <form method="POST" action="{{ route('class-details.unsubscribe', $class->ClassID) }}" onsubmit="return confirm('Czy na pewno chcesz wypisać dziecko z tych zajęć?');">
                                @csrf
                                <button type="submit" class="btn btn-danger">Wypisz dziecko z zajęć</button>
                            </form>
                            <a href="{{ route('my-classes') }}" class="btn btn-secondary mt-2">Powrót do listy zajęć</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class-details End -->
    @endsection