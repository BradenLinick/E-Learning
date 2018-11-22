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
          'description' => 'Hypertext Markup Language or HTML is the building blocks of any webpage. It\'s main purpose is to put content on your page. The language doesn\'t require a high level of programming knowledge however it provides any developer with a fundamental piece to building nearly anything on the web. Dive in.',
          'img' => 'html5',
          'link' => 'IntroController@htmlIntro',
          'color' => '#C72F2C'
        ]);

        $css = Courses::create([
          'course_name' => 'CSS',
          'description' => 'CSS is the language for describing the presentation of Web pages, including colors, layout, and fonts. It allows one to adapt the presentation to different types of devices, such as large screens, small screens, or printers. CSS is independent of HTML and can be used with any XML-based markup language. The separation of HTML from CSS makes it easier to maintain sites, share style sheets across pages, and tailor pages to different environments. This is referred to as the separation of structure (or: content) from presentation. - From w3.org',
          'img' => 'css3-alt',
          'link' => 'IntroController@cssIntro',
          'color' => '#2A7EBA'
        ]);

        $js = Courses::create([
          'course_name' => 'JavaScript',
          'description' => 'JavaScript is a scripting or programming language that allows you to implement complex things on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area.',
          'img' => 'js-square',
          'link' => 'IntroController@jsIntro',
          'color' => '#C7C623'
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
