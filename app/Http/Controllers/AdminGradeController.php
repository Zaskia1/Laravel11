<?php

namespace App\Http\Controllers;

use App\Models\Grade;//panggil model
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class AdminGradeController extends Controller
{
    public function index(){

        $grades = Grade::with(['students', 'department'])->latest()->get();
        return view('admin-grade', [
            'title' => "Grade",
            'grades' => $grades
        ]);

    }
}
