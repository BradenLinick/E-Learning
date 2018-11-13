<?php

use Illuminate\Database\Seeder;
use App\Courses;
use App\Lessons;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Courses::create([
          'course_name' => 'HTML',
          'description' => 'HTML course'
        ]);

        Lessons::create([
          'lesson_name' => 'HTML1',
          'description' => 'Make an <h1>'
        ]);
    }
}
