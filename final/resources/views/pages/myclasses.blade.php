@extends('layouts.app', ['active' => 'myclasses'])

@section('content')

<div class="container">
  <h2 class="text-white text-center display-4">Get Started</h2>
  <h4 id="quote" class="text-center">I have no special talent. <br>I am only passionately curious.</h4>
  <p class="text-white text-center">- Albert Einstein</p>
  <div class="border border-default d-flex align-items-center">
    <h3 class="p-4 text-white">HTML5</h3>
    <p class="text-white p-4">Hypertext Markup Language or HTML is the building blocks of any webpage. It's main purpose is to put content on your page. The language doesn't require a high level of programming knowledge however it provides any developer with a fundamental piece to building nearly anything on the web. <a href="#">Dive in.</a></p>
    <img class="m-2" src="/img/HTML.svg" alt="">
  </div>
  <div id="space-small"></div>
  <div class="border border-default d-flex align-items-center">
    <h3 class="p-4 text-white">CSS3</h3>
    <p class="text-white p-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni voluptates libero deserunt beatae nam. Aliquid vel, in accusantium esse unde facere, sed doloribus odit nemo, dolore recusandae. Fugiat, quidem harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni officia dolor ratione! Ullam magnam aliquid eaque, mollitia magni debitis. Quidem accusamus aliquam voluptatibus minus sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, doloribus porro ipsam perferendis quod unde.</p>
    <img class="m-2" style="width: 10rem; height: 10rem;" src="/img/css3.svg" alt="">
  </div>
  <div id="space-small"></div>
  <div class="border border-default d-flex align-items-center">
    <h3 class="p-4 text-white">JavaScript</h3>
    <p class="text-white p-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni voluptates libero deserunt beatae nam. Aliquid vel, in accusantium esse unde facere, sed doloribus odit nemo, dolore recusandae. Fugiat, quidem harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni officia dolor ratione! Ullam magnam aliquid eaque, mollitia magni debitis. Quidem accusamus aliquam voluptatibus minus sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, doloribus porro ipsam perferendis quod unde.</p>
    <img class="m-2" style="width: 6rem; height: 8rem;" src="/img/js.png" alt="">
  </div>
  <div id="space-small"></div>
  
</div>


@endsection