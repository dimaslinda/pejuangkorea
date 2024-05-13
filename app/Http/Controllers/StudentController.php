<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.kelassaya');
    }

    public function kelaszoom()
    {
        return view('student.kelaszoom');
    }
}
