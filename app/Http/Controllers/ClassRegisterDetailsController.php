<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClassRegisterDetailsController extends Controller
{
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

        $kids = [];
        $role = null;

        if (Auth::check()) {
            $userId = Auth::id();
            // Pobierz rolę użytkownika (jeśli ma wiele ról, pobierz pierwszą)
            $role = DB::table('users_roles')
                ->join('roles', 'users_roles.RoleID', '=', 'roles.RoleID')
                ->where('users_roles.UserID', $userId)
                ->value('roles.RoleName');

            // Pobierz dzieci tylko dla usera
            if ($role === 'user') {
                $kids = DB::table('children')
                    ->where('ParentID', $userId)
                    ->get();
            }
        }

        return view('class-register-details', [
            'page' => 'Szczegóły zajęć',
            'class' => $class,
            'kids' => $kids,
            'role' => $role,
        ]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'child_id' => 'required|exists:children,ChildID',
        ]);

        $childId = $request->input('child_id');

        $isMyChild = DB::table('children')
            ->where('ChildID', $childId)
            ->where('ParentID', Auth::id())
            ->exists();

        if (!$isMyChild) {
            return redirect()->back()->with('error', 'Nie możesz zapisać tego dziecka.');
        }

        $already = DB::table('classes_members')
            ->where('ChildID', $childId)
            ->where('ClassID', $id)
            ->exists();

        if ($already) {
            return redirect()->back()->with('error', 'To dziecko jest już zapisane na te zajęcia.');
        }

        DB::table('classes_members')->insert([
            'ChildID' => $childId,
            'ClassID' => $id,
            'Status' => 'waiting',
        ]);

        return redirect()->back()->with('success', 'Dziecko zostało zapisane na listę rezerwową.');
    }
}
