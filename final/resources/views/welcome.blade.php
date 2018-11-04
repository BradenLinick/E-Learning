@extends('layouts.app', ['active' => '/'])

@section('content')
    <div id="bg">
      <div class="container mt-5 d-flex">
        <div style="max-width: 65%">
          <h2 class="text-white display-4">We believe information should be free. Our mission is to make education more accessible</h2>
        </div>

      </div>
      <div class="my-3 container d-flex flex-column flex-md-row justify-content-between">
        <div id="box" class="d-flex flex-column justify-content-center align-items-center">
          <div style="width: 100%;" class="d-flex justify-content-around align-items-center"><h3 class="text-white">HTML5</h3><img id="classLogo" src="/img/html.svg" alt=""></div>
          <div class="p-3">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ut molestias voluptatum eos accusantium nam consequatur cupiditate vero, sequi eius enim porro eum aliquam, velit iste ipsa unde veritatis! Impedit Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div id="box" class="d-flex flex-column justify-content-center align-items-center">
          <div style="width: 100%;" class="d-flex justify-content-around align-items-center"><h3 class="text-white">CSS3</h3><img id="classLogo" src="/img/css3.svg" alt=""></div>
          <div class="p-3">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ut molestias voluptatum eos accusantium nam consequatur cupiditate vero, sequi eius enim porro eum aliquam, velit iste ipsa unde veritatis! Impedit Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div id="box" class="d-flex flex-column justify-content-center align-items-center">
          <div style="width: 100%;" class="d-flex justify-content-around align-items-center"><h3 class="text-white">JavaScript</h3><img id="classLogo" src="/img/js.png" alt=""></div>
          <div class="p-3">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ut molestias voluptatum eos accusantium nam consequatur cupiditate vero, sequi eius enim porro eum aliquam, velit iste ipsa unde veritatis! Impedit Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>

      <div id="chooseUs" class="container">
        <div id="space"></div>
        <h2 class="text-white text-center mx-2 display-4">Why Choose Us? </h2>
        <div id="space-small"></div>
        <div class="m-4 d-flex flex-column flex-md-row justify-content-between">
          <div class="d-flex flex-column align-items-center">
            <i id="icon" class="fa-7x fas fa-graduation-cap"></i>
            <p class="pt-2 px-4 text-white text-center">Learn from a multitude of comprehensive lessons earning accredited certificates to enhance your CV and LinkedIn</p>
          </div>
          <div class="d-flex flex-column align-items-center">
              <i id="icon" class="fa-7x fas fa-globe-americas"></i>
              <p class="pt-2 px-4 text-white text-center">Get armed with the knowledge you need to make it in today's global development market</p>
          </div>
          <div class="d-flex flex-column align-items-center">
            <i id="icon" class="fa-7x fab fa-studiovinari"></i>
            <p class="pt-2 px-4 text-white text-center">Emerge from our program as a super jedi code ninja master, get out and achieve success wherever your ambitions take you</p>
          </div>
        </div>
      </div>
@endsection