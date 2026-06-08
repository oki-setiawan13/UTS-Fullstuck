<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('students.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis'          => 'required|unique:students',
            'name'         => 'required|string|max:100',
            'birth_date'   => 'required|date',
            'gender'       => 'required|in:L,P',
            'parent_name'  => 'required',
            'phone'        => 'required',
            'address'      => 'required',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')
                         ->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function edit(Student $student)
    {
        $classrooms = Classroom::all();

        return view('students.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nis'          => 'required|unique:students,nis,' . $student->id,
            'name'         => 'required|string|max:100',
            'birth_date'   => 'required|date',
            'gender'       => 'required|in:L,P',
            'parent_name'  => 'required',
            'phone'        => 'required',
            'address'      => 'required',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil diupdate');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
                         ->with('success', 'Siswa berhasil dihapus!');
    }
}