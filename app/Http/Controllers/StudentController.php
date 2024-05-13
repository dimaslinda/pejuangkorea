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

    public function profil()
    {
        return view('student.profil');
    }

    public function password()
    {
        return view('student.password');
    }

    public function pesanan()
    {
        return view('student.pesanan');
    }

    public function dalamproses()
    {
        return view('student.dalamproses');
    }
}
