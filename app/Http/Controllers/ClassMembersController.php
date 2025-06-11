<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassMembersController extends Controller
{
    public function members($classId)
    {
        $members = DB::table('classes_members')
            ->join('children', 'classes_members.ChildID', '=', 'children.ChildID')
            ->where('classes_members.ClassID', $classId)
            ->where('classes_members.Status', 'active')
            ->select('classes_members.MemberID', 'children.FirstName', 'children.LastName')
            ->get();

        $waiting = DB::table('classes_members')
            ->join('children', 'classes_members.ChildID', '=', 'children.ChildID')
            ->where('classes_members.ClassID', $classId)
            ->where('classes_members.Status', 'waiting')
            ->select('classes_members.MemberID', 'children.FirstName', 'children.LastName')
            ->get();

        return view('class-members', [
            'classId' => $classId,
            'members' => $members,
            'waiting' => $waiting,
            'page' => 'Lista uczestników'
        ]);
    }

    public function moveToGroup($classId, $memberId)
    {
        DB::table('classes_members')
            ->where('MemberID', $memberId)
            ->where('ClassID', $classId)
            ->update(['Status' => 'active']);

        return back()->with('success', 'Przeniesiono uczestnika do grupy.');
    }

    public function removeMember($classId, $memberId)
    {
        DB::table('classes_members')
            ->where('MemberID', $memberId)
            ->where('ClassID', $classId)
            ->delete();

        return back()->with('success', 'Uczestnik został usunięty z zajęć.');
    }
}
