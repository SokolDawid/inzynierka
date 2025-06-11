<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyClassesController extends Controller
{
    public function index()
    {
        $userId = Auth::id();


        $childrenIds = DB::table('children')
            ->where('ParentID', $userId)
            ->pluck('ChildID');

        $classes = DB::table('classes')
            ->join('classes_members', 'classes.ClassID', '=', 'classes_members.ClassID')
            ->join('users', 'classes.TeacherID', '=', 'users.UserID')
            ->whereIn('classes_members.ChildID', $childrenIds)
            ->select(
                'classes.*',
                DB::raw("CONCAT(users.firstname, ' ', users.lastname) as TeacherName"),
                'classes_members.ChildID'
            )
            ->get();

        return view('my-classes', [
            'page' => 'Moje zajęcia',
            'classes' => $classes
        ]);
    }
}
