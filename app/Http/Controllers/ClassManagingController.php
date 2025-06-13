<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClassManagingController extends Controller
{
    public function index($classId)
    {
        $class = DB::table('classes')->where('ClassID', $classId)->first();

        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

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

        $class = DB::table('classes')->where('ClassID', $classId)->first();

        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

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

        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

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
        $lesson = DB::table('schedule')->where('ScheduleID', $scheduleId)->first();
        if (!$lesson) {
            abort(404, 'Lekcja nie istnieje.');
        }

        $class = DB::table('classes')->where('ClassID', $lesson->ClassID)->first();
        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

        $attendance = DB::table('attendance')->where('ScheduleID', $scheduleId)->get();

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
        $class = DB::table('classes')->where('ClassID', $classId)->first();

        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

        DB::table('classes')->where('ClassID', $classId)->delete();
        return redirect()->route('classes')->with('success', 'Zajęcia zostały usunięte.');
    }

    public function students($classId)
    {
        $class = DB::table('classes')->where('ClassID', $classId)->first();

        // Sprawdzenie właściciela zajęć
        if (!$class || $class->TeacherID != Auth::id()) {
            abort(403, 'Nie masz dostępu do tych zajęć.');
        }

        return view('class-students', [
            'classId' => $classId,
        ]);
    }
}
