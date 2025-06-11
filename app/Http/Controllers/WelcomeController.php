<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'guardian_name' => 'required|string|max:255',
            'child_name' => 'required|string|max:255',
            'email' => 'required|email',
            'child_age' => 'required|integer|min:1|max:18',
            'message' => 'required|string|min:10',
        ]);

        Mail::to('info@mdk.com')->send(new ContactMessage($validated));

        return back()->with('success', 'Dziękujemy! Twoja wiadomość została wysłana.');
    }
}
