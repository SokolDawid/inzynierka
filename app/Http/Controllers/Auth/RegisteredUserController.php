<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\UsersRole;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return view('auth.register', ['page' => 'Zarejestruj się']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'digits:9'],
            'phone_secondary' => ['nullable', 'digits:9'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'FirstName' => $request->first_name,
            'LastName' => $request->last_name,
            'PhoneNumber' => $request->phone,
            'PhoneNumberSecondary' => $request->phone_secondary,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'WhoAdd' => null,
            'DateAdd' => now(),
        ]);

        $role = Role::find(1);
        if ($role) {
            UsersRole::create([
                'UserID' => $user->UserID,
                'RoleID' => $role->RoleID,
                'DateAssignment' => now(),
            ]);
        }

        event(new Registered($user));

        return redirect()->route('login')->with('success', 'Konto zostało utworzone. Możesz się teraz zalogować.');
    }
}