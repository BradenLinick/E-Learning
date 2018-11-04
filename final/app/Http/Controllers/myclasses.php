<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myclasses extends Controller
{
    public function index() {
      return view('pages.myclasses');
    }
}
