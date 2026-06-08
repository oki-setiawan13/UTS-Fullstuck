<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::withCount('students')->get();
        return view('classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:50',
            'teacher'       => 'required|string|max:100',
            'academic_year' => 'required',
        ]);

        Classroom::create($request->all());
        return redirect()->route('classrooms.index')
                         ->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'name'          => 'required|string|max:50',
            'teacher'       => 'required|string|max:100',
            'academic_year' => 'required',
        ]);

        $classroom->update($request->all());

        return redirect()->route('classrooms.index')
                         ->with('success', 'Kelas berhasil diupdate!');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')
                         ->with('success', 'Kelas berhasil dihapus!');
    }
}