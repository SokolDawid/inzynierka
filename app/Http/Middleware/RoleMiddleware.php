<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        if (!$user) {
            abort(403, 'Brak dostępu.');
        }

        // Pobierz role użytkownika
        $userRoles = DB::table('users_roles')
            ->join('roles', 'users_roles.RoleID', '=', 'roles.RoleID')
            ->where('users_roles.UserID', $user->UserID)
            ->pluck('roles.RoleName')
            ->toArray();

        // Sprawdź, czy użytkownik ma przynajmniej jedną z wymaganych ról
        foreach ($roles as $role) {
            if (in_array($role, $userRoles)) {
                return $next($request);
            }
        }

        abort(403, 'Brak dostępu.');
    }
}