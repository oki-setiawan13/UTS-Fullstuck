<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalStudents'      => Student::count(),
            'totalClassrooms'    => Classroom::count(),
            'totalAnnouncements' => Announcement::count(),
        ]);
    }
}