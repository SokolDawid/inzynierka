<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountUpdateController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('account-update', ['page' => 'Edytuj dane', 'user' => $user]);
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->UserID . ',UserID',
            'phone'      => 'required|digits:9',
            'phone_secondary' => 'nullable|digits:9',
            'password'   => 'nullable|string|min:8|confirmed',
        ]);
        

        $user->FirstName = $validated['first_name'];
        $user->LastName = $validated['last_name'];
        $user->email = $validated['email'];
        $user->PhoneNumber = $validated['phone'];
        $user->PhoneNumberSecondary = $validated['phone_secondary'] ?? null;

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('account')->with('success', 'Dane zostały zaktualizowane.');
    }
}
