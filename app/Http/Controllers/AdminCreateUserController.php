<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UsersRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

class AdminCreateUserController extends Controller
{
    public function index()
    {
        return view('admin-create-user', ['page' => 'Utwórz użytkownika']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:9',
            'phone_secondary' => 'nullable|digits:9',
            'role' => 'required|string',
        ]);

        $randomPassword = Str::random(16);

        $user = User::create([
            'FirstName' => $validated['first_name'],
            'LastName' => $validated['last_name'],
            'PhoneNumber' => $validated['phone'],
            'PhoneNumberSecondary' => $validated['phone_secondary'] ?? null,
            'email' => $validated['email'],
            'password' => Hash::make($randomPassword),
            'WhoAdd' => Auth::user()?->UserID,
            'DateAdd' => now(),
        ]);

        $role = Role::where('RoleName', $validated['role'])->first();
        if ($role) {
            UsersRole::create([
                'UserID' => $user->UserID,
                'RoleID' => $role->RoleID,
                'DateAssignment' => now(),
            ]);
        }

        Password::sendResetLink(['email' => $user->email]);

        return redirect()->route('admin-create-user')->with('success', 'Użytkownik został utworzony i otrzymał e-mail do ustawienia hasła.');
    }
}
