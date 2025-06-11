<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KidsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kids = DB::table('children')
            ->where('ParentID', $user->UserID)
            ->get();

        return view('kids', [
            'page' => 'Moje dzieci',
            'kids' => $kids,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'birth_date' => 'required|date|before:today',
        ]);

        DB::table('children')->insert([
            'FirstName' => $request->input('first_name'),
            'LastName' => $request->input('last_name'),
            'BirthDate' => $request->input('birth_date'),
            'ParentID' => Auth::id(),
        ]);

        return redirect()->route('kids.index')->with('success', 'Dodano dziecko.');
    }
}