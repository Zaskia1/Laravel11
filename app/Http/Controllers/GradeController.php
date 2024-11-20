<?php

namespace App\Http\Controllers;

use App\Models\Grade;//panggil model
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class GradeController extends Controller
{
    public function index(){

        $grades = Grade::with(['students', 'department'])->latest()->get();
        return view('Grade', [
            'title' => "Grade",
            'grades' => $grades
        ]);

    }
}
