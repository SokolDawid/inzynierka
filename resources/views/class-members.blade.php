@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2>Uczestnicy zajęć</h2>
    <ul class="list-group mb-4">
        @forelse($members as $member)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $member->FirstName }} {{ $member->LastName }}
                <form method="POST" action="{{ route('class-members.removeMember', [$classId, $member->MemberID]) }}" onsubmit="return confirm('Usunąć uczestnika z zajęć?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                </form>
            </li>
        @empty
            <li class="list-group-item">Brak uczestników.</li>
        @endforelse
    </ul>

    <h2>Lista rezerwowa</h2>
    <ul class="list-group">
        @forelse($waiting as $member)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $member->FirstName }} {{ $member->LastName }}
                <div>
                    <form method="POST" action="{{ route('class-members.moveToGroup', [$classId, $member->MemberID]) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Do grupy</button>
                    </form>
                    <form method="POST" action="{{ route('class-members.removeMember', [$classId, $member->MemberID]) }}" class="d-inline" onsubmit="return confirm('Usunąć uczestnika z rezerwowej?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">Brak osób na liście rezerwowej.</li>
        @endforelse
    </ul>
</div>
@endsection