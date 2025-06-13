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

        $children = DB::table('children')
            ->where('ParentID', $userId)
            ->get();

        $classes = DB::table('classes')
            ->join('classes_members', 'classes.ClassID', '=', 'classes_members.ClassID')
            ->join('users', 'classes.TeacherID', '=', 'users.UserID')
            ->join('children', 'classes_members.ChildID', '=', 'children.ChildID')
            ->whereIn('classes_members.ChildID', $children->pluck('ChildID'))
            ->select(
                'classes.*',
                DB::raw("CONCAT(users.firstname, ' ', users.lastname) as TeacherName"),
                'classes_members.ChildID',
                'children.FirstName as ChildFirstName',
                'children.LastName as ChildLastName'
            )
            ->get()
            ->groupBy('ChildID');

        return view('my-classes', [
            'page' => 'Moje zajęcia',
            'children' => $children,
            'classesByChild' => $classes
        ]);
    }
}
