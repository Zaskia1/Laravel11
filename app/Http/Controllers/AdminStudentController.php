<?php

namespace App\Http\Controllers;

use App\Models\Student;//panggil model
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class AdminStudentController extends Controller
{
    public function index()
{
    $students = Student::with(['grade', 'department'])->get();

    return view('admin-student', [
        'title' => "Student",
        'students' => $students
    ]);
}


    public function create()
    {
        // Return a view to display the student creation form
        return view('students.create'); // Ensure this view exists
    }
}
