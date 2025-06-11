<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetAfterEmailController extends Controller
{
    public function index()
    {
        return view('auth/password-reset-after-email', ['page' => 'Resetuj hasło']);
    }
}
