@extends('layouts.app')
@section('content')
<!-- Class-register-details Start -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">{{ $class->Title }}</h2>
            <p>{!! $class->Description !!}</p>

            <p><strong>Prowadzący:</strong> {{ $class->TeacherName }}</p>
        </div>

        <div class="col-lg-4">
            <div class="info-box">
                <h5>Terminy zapisów</h5>
                <p>
                    Od <strong>{{ \Carbon\Carbon::parse($class->RecruitmentStart)->format('d.m.Y H:i') }}</strong>
                    do <strong>{{ \Carbon\Carbon::parse($class->RecruitmentEnd)->format('d.m.Y H:i') }}</strong>
                </p>

                <hr>

                <h5>Ilość miejsc</h5>
                <p><strong>{{ $class->MaxAttendees }}</strong> uczestników</p>
                <hr>
                <h5>Zarejestrowanych obecnie</h5>
                <p><strong>{{ $class->CurrentAttendees }}</strong> osób</p>
                <hr>

                @if (!Auth::check())
                    <div class="alert alert-info text-center">
                        Aby zapisać dziecko na zajęcia, musisz się <a href="{{ route('login') }}">zalogować</a>.
                    </div>
                @elseif ($role === 'user')
                    <form method="POST" action="{{ route('class-register.store', $class->ClassID) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="child_id" class="form-label">Wybierz dziecko do zapisania:</label>
                            <select name="child_id" id="child_id" class="form-select" required>
                                <option value="">-- wybierz dziecko --</option>
                                @foreach($kids as $kid)
                                    <option value="{{ $kid->ChildID }}">{{ $kid->FirstName }} {{ $kid->LastName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg w-100">Zapisz dziecko</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                @elseif ($role === 'teacher')
                    <a href="{{ route('class-members.members', $class->ClassID) }}" class="btn btn-primary w-100">
                        Przejdź do listy zapisanych na zajęcia
                    </a>
                @endif

                <a href="{{ route('classes') }}" class="btn btn-link mt-3">Powrót do listy zajęć</a>
            </div>
        </div>
    </div>
</div>
<!-- Class-register-details End -->
@endsection
