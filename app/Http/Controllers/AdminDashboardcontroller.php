<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardcontroller extends Controller
{
    public function index()
    {
    return view('admin-dashboard', [
        'title' => "Dashboard",
    ]);
}
}
