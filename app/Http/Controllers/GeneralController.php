<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Materizoom;
use App\Models\Mentor;
use App\Models\Zoom;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $kelasvideo = Course::where('published', 1)->latest()->take(4)->get();
        return view('index', compact('kelasvideo'));
    }

    public function about()
    {
        return view('about');
    }

    public function kelas()
    {
        $category = Category::all();
        $course = Course::where('published', 1)->get();
        return view('kelas', compact('category', 'course'));
    }

    public function zoom()
    {
        $zoom = Zoom::all();
        return view('zoom', compact('zoom'));
    }

    public function detailkelas($slug)
    {
        $kelasvideo = Course::where('slug', $slug)->with('publishedLessons')->firstOrFail();
        $totallesson = Lesson::where('course_id', $kelasvideo->id)->where('published', 1)->count();
        $lesson = Lesson::where('course_id', $kelasvideo->id)->where('published', 1)->get();
        $mentor = Mentor::where('id', $kelasvideo->mentor_id)->first();
        return view('detailkelas', compact('kelasvideo', 'totallesson', 'lesson', 'mentor'));
    }

    public function detailzoom($slug)
    {
        $zoom = Zoom::where('slug', $slug)->firstOrFail();
        $totalzoom = Materizoom::where('zoom_id', $zoom->id)->count();
        $materizoom = Materizoom::where('zoom_id', $zoom->id)->get();
        $mentor = Mentor::where('id', $zoom->mentor_id)->first();
        return view('detailzoom', compact('zoom', 'totalzoom', 'materizoom', 'mentor'));
    }

    public function detailcourse()
    {
        return view('student.detailcourse');
    }

    public function invoice($slug)
    {
        $itemco = Course::where('slug', $slug)->firstOrFail();
        return view('checkout', compact('itemco'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
