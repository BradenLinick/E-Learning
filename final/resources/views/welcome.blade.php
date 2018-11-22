@extends('layouts.app', ['active' => '/'])

@section('content')
    <div id="bg">
      <div class="container d-flex flex-column align-content-center">
        <h1 class="text-white display-4">Our mission is to make education more accessible. Start your coding journey today.</h1>
      
        
        <div class="my-3 d-flex flex-column flex-md-row justify-content-between">
          @foreach ($courses as $course)
          <div id="box" class="d-flex flex-column justify-content-center align-items-center">
            <div id="box-width" class="d-flex justify-content-around align-items-center"><h3 class="text-white ml-md-4"><a href="{{ action($course->link) }}">{{ $course->course_name }}</a></h3><i style="color: {{ $course->color }}" class="p-3 fa-4x fab fa-{{ $course->img }}"></i></div>
            <div class="p-3">
              <p class="text-white">{{ $course->description }}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>

    <div id="home-bottom-container" class="container">
      <h2 class="text-white text-center mx-2 display-4">Why Choose Us? </h2>
        <div id="chooseUs" class="container d-flex flex-column flex-md-row">
          <div class="m-4 d-flex flex-column flex-md-row justify-content-between">
            <div class="d-flex flex-column align-items-center">
              <i id="yellow-text"  class="fa-7x fas fa-graduation-cap"></i>
              <p class="pt-2 px-4 text-white text-center">Learn from a multitude of comprehensive lessons earning accredited certificates to enhance your CV and LinkedIn</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <i id="pri-text" class="fa-7x fas fa-globe-americas"></i>
                <p class="pt-2 px-4 text-white text-center">Get armed with the latest knowledge you need to make it in today's global development market</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <i id="red-text" class="fa-7x fab fa-studiovinari"></i>
              <p class="pt-2 px-4 text-white text-center">Emerge from our program as a super jedi code ninja master, get out and achieve success wherever your ambitions take you</p>
            </div>
          </div>
      </div>
    </div>
  <div id="slideshow">
    <div id="slide"><p>Collaborate as a team</p></div>
    <div id="slide"><p>Grow from you dream destination</p></div>
    <div id="slide"><p>Push your limits</p></div>
    <div id="slide"><p>Find your dream job</p></div>
  </div>
@endsection