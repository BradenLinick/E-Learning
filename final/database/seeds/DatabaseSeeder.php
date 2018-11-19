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
        $html = Courses::create([
          'course_name' => 'HTML',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo mollitia perferendis libero nam rerum officia cupiditate ut vel consequatur, illum quod doloribus eius pariatur suscipit, fuga odit velit aspernatur quas autem culpa ea? Qui quas officia, iusto architecto praesentium laborum.',
          'img' => '/img/html.svg',
          'link' => "action('IntroController@htmlIntro')"
        ]);

        $css = Courses::create([
          'course_name' => 'CSS',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo mollitia perferendis libero nam rerum officia cupiditate ut vel consequatur, illum quod doloribus eius pariatur suscipit, fuga odit velit aspernatur quas autem culpa ea? Qui quas officia, iusto architecto praesentium laborum.',
          'img' => '/img/css3.svg',
          'link' => "cssIntro"
        ]);

        $js = Courses::create([
          'course_name' => 'JavaScript',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo mollitia perferendis libero nam rerum officia cupiditate ut vel consequatur, illum quod doloribus eius pariatur suscipit, fuga odit velit aspernatur quas autem culpa ea? Qui quas officia, iusto architecto praesentium laborum.',
          'img' => '/img/js.png',
          'link' => "jsIntro"
        ]);

        for ($i = 0; $i < 5; $i++) {
          Lessons::create([
            'lesson_name' => 'HTML',
            'description' => 'Make an <h1>',
            'course_id' => $html->id
          ]);

          Lessons::create([
            'lesson_name' => 'CSS',
            'description' => 'Make an <h1>',
            'course_id' => $css->id
          ]);

          Lessons::create([
            'lesson_name' => 'JavaScript',
            'description' => 'Make an <h1>',
            'course_id' => $js->id
          ]);
        }
    }
}
