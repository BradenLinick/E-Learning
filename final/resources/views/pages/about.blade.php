@extends('layouts.app', ['active' => 'about'])

@section('content')

<div class="container">
  <h2 class="text-white display-4">Meet the team</h2>
  <div id="div"></div>
  <div id="about" class="my-3 d-flex justify-content-between">
    <img id="profile-ric" src="{{ asset('img/ricky.jpg')}}" alt="">
    <div class="d-flex flex-column justify-content-between align-items-center">
      <h4 id="name" class="text-white">Riccardo Dal Pio Luogo</h4>
      <p id="profile-text" class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti.</p>
    </div>
  </div>
  <div id="div"></div>
  <div id="about" class="my-3 d-flex justify-content-between">
    <img id="profile-bra" src="{{ asset('img/Prophoto.jpg')}}" alt="">
    <div class="d-flex flex-column justify-content-around align-items-center">
      <h4 id="name" class="text-white">Braden Linick</h4>
      <p id="profile-text" class="text-white">Braden has travelled all over the world while working in the teaching industry long before getting a foot in the development industry. He's an honors university graduate and completed a coding bootcamp in Prague in 2018. His love for helping people learn and reach their career goals was a main driving force behind him co-founding SJCNs.</p>
    </div>
  </div>
</div>

@endsection