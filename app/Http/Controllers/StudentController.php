<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Invoice;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $purchased_courses = [];
        if(auth()->check()) {
            $purchased_courses = Course::whereHas('students', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
            ->with('lessons')
            ->orderBy('id', 'desc')
            ->get();
        }

        $courses = Course::where('published', 1)->latest()->get();
        return view('student.kelassaya', compact('purchased_courses', 'courses'));
    }

    public function pembelajaran($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $lesson = Lesson::where('course_id', $course->id)->where('published', 1)->get();

        $purchased_course = DB::table('course_student')->where('user_id', Auth()->user()->id)->where('course_id', $course->id)->count() > 0;
        if(!$purchased_course)
        {
            return redirect()->route('student.kelassaya');
        }
        return view('student.detailcourse', compact('course', 'purchased_course'));
    }

    public function dashboardzoom()
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
        $invoice = Invoice::where('user_id', Auth()->user()->id)->where('status', 'paid')->get();
        return view('student.pesanan', compact('invoice'));
    }

    public function dalamproses()
    {
        $invoice = Invoice::where('user_id', Auth()->user()->id)->where('status', 'pending')->get();
        return view('student.dalamproses', compact('invoice'));
    }

    public function detailpesanan($no_invoice)
    {
        $invoice = Invoice::where('no_invoice', $no_invoice)->first();
        return view('student.detailpesanan', compact('invoice'));
    }
}
