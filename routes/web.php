<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminDepartmentController;
use App\Http\Controllers\AdminGradecontroller;
use App\Http\Controllers\AdminDashboardcontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::resource('students', StudentController::class);

Route::resource('grades', GradeController::class);
Route::get('/admin-grades', [AdminGradeController::class, 'index']);

Route::resource('departments', DepartmentController::class);
Route::get('/admin-departments', [AdminDepartmentController::class, 'index']);


Route::get('/admin-student', [AdminStudentController::class, 'index']);
Route::get('/admin-dashboard', [AdminDashboardController::class, 'index']);

// Route to show the form for creating a new student
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

// Route to handle the form submission for storing a new student
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
