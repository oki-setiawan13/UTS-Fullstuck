<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('student.classroom')
                        ->orderBy('date', 'desc')
                        ->paginate(15);
        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        $students = Student::with('classroom')->get();
        return view('attendances.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'date'       => 'required|date',
            'status'     => 'required|in:hadir,sakit,izin,alpha',
            'notes'      => 'nullable|string',
        ]);

        $exists = Attendance::where('student_id', $request->student_id)
                            ->where('date', $request->date)
                            ->exists();

        if ($exists) {
            return back()->withErrors(['student_id' => 'Absensi siswa ini sudah ada!']);
        }

        Attendance::create($request->all());

        return redirect()->route('attendances.index')
                         ->with('success', 'Absensi berhasil disimpan!');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendances.index')
                         ->with('success', 'Absensi berhasil dihapus!');
    }
}