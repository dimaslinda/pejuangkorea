<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Mentor;
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

    public function detailkelas($slug)
    {
        $kelasvideo = Course::where('slug', $slug)->with('publishedLessons')->firstOrFail();
        $totallesson = Lesson::where('course_id', $kelasvideo->id)->where('published', 1)->count();
        $lesson = Lesson::where('course_id', $kelasvideo->id)->where('published', 1)->get();
        $mentor = Mentor::where('id', $kelasvideo->mentor_id)->first();
        return view('detailkelas', compact('kelasvideo', 'totallesson', 'lesson', 'mentor'));
    }

    public function detailzoom()
    {
        return view('detailzoom');
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
