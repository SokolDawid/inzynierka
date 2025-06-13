<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use App\Models\UsersRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public ?string $phone = '';
    public string $birthdate = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'digits:9'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'FirstName' => $this->first_name,
            'LastName' => $this->last_name,
            'PhoneNumber' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'WhoAdd' => null,
            'DateAdd' => now(),
        ]);

        UsersRole::create([
            'UserID' => $user->UserID,
            'RoleID' => Role::find(1)?->RoleID ?? 1,
            'DateAssignment' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Konto zostało utworzone. Możesz się teraz zalogować.');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
