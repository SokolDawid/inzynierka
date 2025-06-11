<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassManagingController extends Controller
{
    public function index($classId)
    {
        $class = DB::table('classes')->where('ClassID', $classId)->first();

        $lessons = DB::table('schedule')
            ->where('ClassID', $classId)
            ->orderByDesc('Date')
            ->paginate(5);

        return view('class-managing', [
            'page' => 'Zarządzanie zajęciami',
            'class' => $class,
            'lessons' => $lessons,
        ]);
    }

    public function updateSchedule(Request $request, $classId)
    {
        $request->validate([
            'weekday' => 'required|in:Poniedziałek,Wtorek,Środa,Czwartek,Piątek,Sobota,Niedziela',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        DB::table('classes')
            ->where('ClassID', $classId)
            ->update([
                'weekday' => $request->input('weekday'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
            ]);

        return back()->with('success', 'Termin zajęć zaktualizowany.');
    }

    public function addLesson(Request $request, $classId)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'date' => 'required|date',
        ]);

        $class = DB::table('classes')->where('ClassID', $classId)->first();

        DB::table('schedule')->insert([
            'ClassID' => $classId,
            'Date' => $request->input('date'),
            'StartTime' => $class->start_time,
            'EndTime' => $class->end_time,
            'topic' => $request->input('title'),
        ]);

        return back()->with('success', 'Nowa lekcja została dodana.');
    }

    public function lessonReport($scheduleId)
    {
        $lesson = DB::table('schedule')
            ->where('ScheduleID', $scheduleId)
            ->first();

        $class = DB::table('classes')
            ->where('ClassID', $lesson->ClassID)
            ->first();

        $attendance = DB::table('attendance')
            ->join('classes_members', 'attendance.MemberID', '=', 'classes_members.MemberID')
            ->join('children', 'classes_members.ChildID', '=', 'children.ChildID')
            ->where('attendance.ScheduleID', $scheduleId)
            ->select('children.FirstName', 'children.LastName', 'attendance.Attendance')
            ->get();

        $present = $attendance->where('Attendance', 'Present')->count();
        $absent = $attendance->where('Attendance', 'Absent')->count();

        return view('lesson-report', [
            'lesson' => $lesson,
            'class' => $class,
            'attendance' => $attendance,
            'present' => $present,
            'absent' => $absent,
        ]);
    }

    public function destroy($classId)
    {
        DB::table('classes')->where('ClassID', $classId)->delete();
        return redirect()->route('classes')->with('success', 'Zajęcia zostały usunięte.');
    }

    public function students($classId)
    {

        return view('class-students', [
            'classId' => $classId,
        ]);
    }
}
