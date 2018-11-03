@extends('layouts.app', ['active' => 'about'])

@section('content')

<div class="container">
  <h2 class="text-white display-4">Meet the team</h2>
  <div>
    <h3 class="text-white">Riccardo Dal Pio Luogo</h3>
    <div class="d-flex justify-content-around align-items-center">
      <img class="border-none rounded rounded-circle" style="width: 10rem; height: 12rem" src="/img/ricky.jpg" alt="">
      <p style="width: 40rem" class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti.</p>
    </div>
  </div>
  <div>
    <h3 class="text-white">Braden Linick</h3>
    <div class="d-flex justify-content-around align-items-center">
        <img class="border-none rounded rounded-circle" style="width: 10rem; height: 14rem" src="/img/prophoto.jpg" alt="">
        <p style="width: 40rem; background-color: rgba(0,0,0,0.7);" class="text-white border-none rounded p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti.</p>
      </div>
  </div>
</div>

@endsection