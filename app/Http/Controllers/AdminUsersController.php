<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUsersController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::query()
            ->when($search, function ($query, $search) {
                $query->where('LastName', 'like', "%{$search}%");
            })
            ->orderBy('LastName')
            ->paginate(5);


        return view('admin-users', [
            'page' => 'Zarządzanie użytkownikami',
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        return view('account', [
            'page' => 'Szczegóły użytkownika',
            'user' => $user,
        ]);
    }

    public function edit(User $user)
{
    return view('account-update', [
        'user' => $user,
        'page' => 'Edytuj użytkownika'
    ]);
}

public function update(Request $request, User $user)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email|unique:users,email,' . $user->UserID . ',UserID',
        'phone'      => 'required|digits:9',
        'phone_secondary'      => 'required|digits:9',
        'password'   => 'nullable|string|min:8|confirmed',
    ]);

    $user->FirstName   = $validated['first_name'];
    $user->LastName    = $validated['last_name'];
    $user->email       = $validated['email'];
    $user->PhoneNumber = $validated['phone'];
    $user->PhoneNumberSecondary = $validated['phone_secondary'];

    if (!empty($validated['password'])) {
        $user->password = Hash::make($validated['password']);
    }

    $user->save();

    return redirect()->route('admin.users.index')->with('success', 'Dane użytkownika zaktualizowane.');
}

    public function destroy(User $user)
    {
        $childrenIds = DB::table('children')->where('ParentID', $user->UserID)->pluck('ChildID');

        DB::table('classes_members')->whereIn('ChildID', $childrenIds)->delete();

        DB::table('users_roles')->where('UserID', $user->UserID)->delete();

        DB::table('children')->where('ParentID', $user->UserID)->delete();

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Użytkownik został usunięty.');
    }
}
