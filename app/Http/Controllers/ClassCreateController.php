<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ClassCreateController extends Controller
{
    public function index()
    {
        return view('class-create', ['page' => 'Utwórz zajęcia']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                      => 'required|string|max:255',
            'description'               => 'required|string',
            'image'                     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'capacity'                  => 'required|integer|min:1',
            'max_total_registrations'   => 'required|integer|min:1',
            'weekday'                   => 'required|in:Poniedziałek,Wtorek,Środa,Czwartek,Piątek,Sobota,Niedziela',
            'time_start'                => 'required|date_format:H:i',
            'time_end'                  => 'required|date_format:H:i|after:time_start',
            'enrollment_start'          => 'required|date_format:Y-m-d\TH:i',
            'enrollment_end'            => 'required|date_format:Y-m-d\TH:i|after_or_equal:enrollment_start',
        ]);

        // Zapis zdjęcia do public/img
        $image = $request->file('image');
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path('img'), $imageName);

        $teacherId = Auth::id();

        $classId = DB::table('classes')->insertGetId([
            'TeacherID'                 => $teacherId,
            'Title'                     => $request->input('name'),
            'MainPhoto'                 => $imageName,
            'Description'               => $request->input('description'),
            'MaxAttendees'              => $request->input('capacity'),
            'CurrentAttendees'          => 0,
            'TotalRegistered'           => 0,
            'MaxTotalRegistrations'     => $request->input('max_total_registrations'),
            'RecruitmentStart'          => $request->input('enrollment_start'),
            'RecruitmentEnd'            => $request->input('enrollment_end'),
            'start_time'                => $request->input('time_start'),
            'end_time'                  => $request->input('time_end'),
            'weekday'                   => $request->input('weekday'),
        ]);

        return redirect()->back()->with('success', 'Zajęcia zostały utworzone.');
    }
}
