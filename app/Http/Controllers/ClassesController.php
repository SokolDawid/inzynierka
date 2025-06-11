<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = DB::table('classes')
            ->join('users', 'classes.TeacherID', '=', 'users.UserID')
            ->select('classes.*', DB::raw("CONCAT(users.firstname, ' ', users.lastname) as TeacherName"))
            ->get();
            
        return view('classes', [
            'page' => 'Zajęcia',
            'classes' => $classes
        ]);
    }
    
    public function show($id)
    {
        $class = DB::table('classes')
            ->join('users', 'classes.TeacherID', '=', 'users.UserID')
            ->select('classes.*', DB::raw("CONCAT(users.firstname, ' ', users.lastname) as TeacherName"))
            ->where('classes.ClassID', $id)
            ->first();

        if (!$class) {
        abort(404);
        }

        return view('class-register-details', [
            'class' => $class,
            'page' => 'Szczegóły zajęć'
        ]);
    }
}
