<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresenceController extends Controller
{
    public function index()
    {
        return view('presence.show', ['page' => 'Sprawdź obecność']);
    }

    public function show($scheduleId)
    {
        $lesson = DB::table('schedule')
            ->join('classes', 'schedule.ClassID', '=', 'classes.ClassID')
            ->where('schedule.ScheduleID', $scheduleId)
            ->select('schedule.*', 'classes.Title as ClassTitle')
            ->first();

        $students = DB::table('classes_members')
            ->join('children', 'classes_members.ChildID', '=', 'children.ChildID')
            ->join('users', 'children.ParentID', '=', 'users.UserID')
            ->where('classes_members.ClassID', $lesson->ClassID)
            ->select(
                'classes_members.MemberID',
                'children.FirstName',
                'children.LastName',
                'users.PhoneNumber',
                'users.PhoneNumberSecondary'
            )
            ->get();

        $attendance = DB::table('attendance')
            ->where('ScheduleID', $scheduleId)
            ->pluck('Attendance', 'MemberID');

        return view('presence', [
            'lesson' => $lesson,
            'students' => $students,
            'attendance' => $attendance,
            'page' => 'Sprawdź obecność'
        ]);
    }

    public function save(Request $request, $scheduleId)
    {
        foreach ($request->input('attendance', []) as $memberId => $status) {
            DB::table('attendance')->updateOrInsert(
                ['ScheduleID' => $scheduleId, 'MemberID' => $memberId],
                ['Attendance' => $status]
            );
        }
        return redirect()->route('presence.show', $scheduleId);
    }
}
