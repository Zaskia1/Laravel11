<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact', [
            'title' => 'Contact',
            'name' => 'Zaskia Amelia Putri',
            'alamat' => 'Peganjaran, Bae, Kudus',
            'linkedin' => 'https://www.linkedin.com/in/zaskia-amelia-259811311',
            'repository' => 'https://github.com/Zaskia1'
        ]);
    }
}
