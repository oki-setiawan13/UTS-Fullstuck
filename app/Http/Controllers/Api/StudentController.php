<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data siswa berhasil diambil',
            'data'    => $students
        ]);
    }

    public function show(Student $student)
    {
        return response()->json([
            'status' => 'success',
            'data'   => $student->load('classroom', 'attendances')
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis'          => 'required|unique:students',
            'name'         => 'required|string|max:100',
            'birth_date'   => 'required|date',
            'gender'       => 'required|in:L,P',
            'parent_name'  => 'required',
            'phone'        => 'required',
            'address'      => 'required',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        $student = Student::create($validated);
        return response()->json([
            'status'  => 'success',
            'message' => 'Siswa berhasil ditambahkan',
            'data'    => $student
        ], 201);
    }
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
        
            'nis'          => 'required|unique:students',
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
        return response()->json([
            'status'  => 'success',
            'message' => 'Siswa berhasil dihapus'
        ]);
    }

}