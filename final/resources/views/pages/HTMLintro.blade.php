@extends('layouts.app', ['active' => 'HTMLintro'])

@section('content')

<div class="container">
  <h2 class="text-white display-4">Welcome to <span id="yellow-text">&lt;</span> HTML <span id="pri-text">&gt;</span></h2>
  <div id="">
    <h3 id="subhead-html" class="text-white">Where <span id="color1">every</span> developer starts</h3>
    <div class="d-flex flex-column justify-content-between align-items-center mt-4">
      <div id="intro-text">
        <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti.
        </p>
        <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, distinctio corporis porro qui deleniti dignissimos sunt autem sed sequi explicabo delectus voluptatibus inventore. Ipsam tenetur officia, maxime nobis fugiat corrupti.
        </p>
      </div>
      <div>
        <ul>
          <a href="{{ action('LessonsController@index') }}"><li class="text-white">L1: What are elements?</li></a>
          <a href="{{ action('LessonsController@index') }}"><li class="text-white">L2: Body and more on elements</li>
          <a href="{{ action('LessonsController@index') }}"><li class="text-white">L3: The head and what the user doesn't see</li>
          <a href="{{ action('LessonsController@index') }}"><li class="text-white">L4: Important non-essential elements</li>
          <a href="{{ action('LessonsController@index') }}"><li class="text-white">L5: Recap</li>
        </ul>
    </div>
    </div>
  </div>
</div>

@endsection