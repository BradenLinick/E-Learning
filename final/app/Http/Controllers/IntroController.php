<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
  public function htmlIntro() {
    return view('pages.HTMLintro');
  }
  public function cssIntro() {
    return view('pages.CSSintro');
  }
  public function jsIntro() {
    return view('pages.JSintro');
  }
}
