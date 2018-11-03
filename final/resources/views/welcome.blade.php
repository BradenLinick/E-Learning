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

      </div>
@endsection