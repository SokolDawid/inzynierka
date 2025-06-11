@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1 class="mb-4">Zarządzanie zajęciami: {{ $class->Title }}</h1>

    <div class="mb-5">
        <h3>Edytuj termin zajęć</h3>
        <form method="POST" action="{{ route('class-managing.updateSchedule', $class->ClassID) }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Dzień tygodnia</label>
                    <select name="weekday" class="form-control" required>
                        @foreach(['Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota','Niedziela'] as $day)
                            <option value="{{ $day }}" @if($class->weekday == $day) selected @endif>{{ $day }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Godzina rozpoczęcia</label>
                    <input type="time" name="start_time" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $class->start_time)->format('H:i') }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Godzina zakończenia</label>
                    <input type="time" name="end_time" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $class->end_time)->format('H:i') }}" required>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary mt-3">Zapisz zmiany</button>
                </div>
            </div>
        </form>
    </div>

    <div class="mb-5">
        <h3>Dodaj nową lekcję</h3>
        <form method="POST" action="{{ route('class-managing.addLesson', $class->ClassID) }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Tytuł lekcji</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Data lekcji</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success mt-3">Dodaj lekcję</button>
                </div>
            </div>
        </form>
    </div>

    <hr class="my-4">
    <h3>Lista lekcji</h3>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Data</th>
                    <th>Temat</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lessons as $lesson)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($lesson->Date)->format('d.m.Y') }}</td>
                        <td>{{ $lesson->topic }}</td>
                        <td>
                            <a href="{{ route('presence.show', $lesson->ScheduleID) }}" class="btn btn-info btn-sm">Sprawdź obecność</a>
                            <a href="{{ route('lesson.report', $lesson->ScheduleID) }}" class="btn btn-secondary btn-sm">Raport zajęć</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Brak lekcji.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div>
        {{ $lessons->withQueryString()->links('pagination::bootstrap-5')}}
    </div>

    <form method="POST" action="{{ route('class-managing.destroy', $class->ClassID) }}" class="d-inline" onsubmit="return confirm('Czy na pewno chcesz usunąć te zajęcia? Tej operacji nie można cofnąć!');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-3">Usuń zajęcia</button>
    </form>
    <a href="{{ route('class-members.members', $class->ClassID) }}" class="btn btn-secondary mb-3 ms-2">Lista uczniów</a>
</div>
@endsection