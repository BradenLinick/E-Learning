<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lessons;

class LessonsController extends Controller
{
    public function index() {
      $lessons = Lessons::where('lesson_name', '=', 'HTML')->first();
      
      return view('pages.lessons', [
          'html' => $lessons
        ]);
      
    }

    public function api($number) {
      $lesson = Lessons::where('lesson_name', '=', 'HTML')->skip($number-1)->first();
      $count = Lessons::where('lesson_name', '=', 'HTML')->count();
      $Parsedown = new \Parsedown();
      $lesson->description = $Parsedown->text($lesson->description);

      return [
        'lesson' => $lesson,
        'last' => $count == $number
      ];

    }
}
