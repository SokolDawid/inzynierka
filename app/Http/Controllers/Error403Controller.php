<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error403Controller extends Controller
{
    public function index()
    {
        return view('errors/403', ['page' => 'Error 403']);
    }
}
