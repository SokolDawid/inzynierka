@extends('layouts.app')
    @section('content')
        <!-- Presence Start -->
        <div class="container py-5">
            <h1 class="mb-4">
                Lista obecności: {{ $lesson->ClassTitle }} - {{ \Carbon\Carbon::parse($lesson->Date)->format('d.m.Y') }}
            </h1>

            <form method="POST" action="{{ route('presence.save', $lesson->ScheduleID) }}">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Uczeń</th>
                            <th>Telefon opiekuna</th>
                            <th>Telefon zastępczy</th>
                            <th>Obecność</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->FirstName }} {{ $student->LastName }}</td>
                                <td>{{ $student->PhoneNumber ?? '-' }}</td>
                                <td>{{ $student->PhoneNumberSecondary ?? '-' }}</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendance[{{ $student->MemberID }}]" id="present_{{ $student->MemberID }}" value="Present"
                                            {{ (isset($attendance[$student->MemberID]) && $attendance[$student->MemberID] == 'Present') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="present_{{ $student->MemberID }}">Obecny</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendance[{{ $student->MemberID }}]" id="absent_{{ $student->MemberID }}" value="Absent"
                                            {{ (isset($attendance[$student->MemberID]) && $attendance[$student->MemberID] == 'Absent') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="absent_{{ $student->MemberID }}">Nieobecny</label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Zapisz obecność</button>
                </div>
            </form>

            <div class="mt-4">
                <a href="{{ route('class-managing.index', $lesson->ClassID) }}" class="btn btn-secondary">Powrót do zajęć</a>
            </div>
        </div>
        <!-- Presence End -->
    @endsection