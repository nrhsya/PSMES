<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    public function homepage()
    {
        return view('student.studentHomepage');
    }

    public function profile()
    {
        return view('dashboards.students.profile');
    }

    public function settings()
    {
        return view('dashboards.students.settings');
    }
}
