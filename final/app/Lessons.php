<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    public function course() {
      $this->belongsTo('App\Courses');
    }

    public function users() {
      $this->belongsToMany('App\User');
    }
}
