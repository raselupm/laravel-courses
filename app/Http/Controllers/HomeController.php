<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $series = Series::take(4)->get();
        $featuredCourses = Course::take(6)->get();
        return view('welcome', [
            'series' => $series,
            'courses' => $featuredCourses
        ]);
    }

    public function dashboard() {
        if(Auth::user()->type === 1) {
            return view('dashboard');
        } else {
            return redirect()->route('home');
        }
    }
}
