<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassDetailsController extends Controller
{
    public function index()
    {
        return view('class-details', ['page' => 'Szczegóły zajęć']);
    }

    public function show($classId)
    {
        $class = DB::table('classes')->where('ClassID', $classId)->first();

        $userId = Auth::id();
        $childrenIds = DB::table('children')->where('ParentID', $userId)->pluck('ChildID');

        $attendance = DB::table('attendance')
            ->join('schedule', 'attendance.ScheduleID', '=', 'schedule.ScheduleID')
            ->join('classes_members', 'attendance.MemberID', '=', 'classes_members.MemberID')
            ->where('schedule.ClassID', $classId)
            ->whereIn('classes_members.ChildID', $childrenIds)
            ->select('schedule.Date', 'schedule.StartTime', 'schedule.EndTime', 'attendance.Attendance')
            ->orderBy('schedule.Date')
            ->paginate(5);

        return view('class-details', [
            'class' => $class,
            'attendance' => $attendance,
            'page' => 'Szczegóły zajęć',
        ]);
    }
    public function unsubscribe(Request $request, $classId)
    {
        $userId = Auth::id();
        $childrenIds = DB::table('children')->where('ParentID', $userId)->pluck('ChildID');
        DB::table('classes_members')
            ->where('ClassID', $classId)
            ->whereIn('ChildID', $childrenIds)
            ->delete();

        return redirect()->route('my-classes')->with('success', 'Dziecko zostało wypisane z zajęć.');
    }
}
