@extends('layouts.app')
    @section('content')
        <!-- Admin-users Start -->
        <div class="container pb-5">
            <div class="mb-4">
                <form method="GET" action="{{ route('admin.users.index') }}">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Szukaj po nazwisku" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Szukaj</button>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>E-mail</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->FirstName }}</td>
                                <td>{{ $user->LastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.users.show', $user) }}" class="btn btn-info btn-sm">Szczegóły</a>
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edytuj</a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Na pewno chcesz usunąć użytkownika?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Brak użytkowników.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $users->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <!-- Admin-users End -->
    @endsection