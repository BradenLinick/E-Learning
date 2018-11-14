<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lessons;

class LessonsController extends Controller
{
    public function index() {
      $lessons = Lessons::where('lesson_name', '=', 'HTML')->get();
      
      return view('pages.lessons', [
          'html' => $lessons
        ]);
      
    }
}
