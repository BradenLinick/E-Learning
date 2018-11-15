<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::all();
        return view('welcome', [
          'courses' => $courses
        ]);
    }
}
