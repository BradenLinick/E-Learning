@extends('layouts.app', ['active' => 'lessons'])

@section('styles')
<link href="{{ asset('css/editor.css') }}" rel="stylesheet">
    <link href="{{asset('css/timer.css')}}" rel="stylesheet">
@endsection

@section('content')
<div data-lesson="1" id="lesson-container" class="d-flex">



  <div id="box-left" class="border border-default d-flex flex-column">
    <div id="jumbo-mini" class="d-flex justify-content-between">
      <h3 class="text-white text-left m-2 d-inline">Lesson</h3>
      {{-- <h1><time class="time">00:00:00</time></h1> --}}
      <h1 class="d-inline pt-2 pr-2"></h1>
    </div>
      <div class="timeContainer d-flex justify-content-end py-3">
        <button id="timeStart" class="timeButton start-color">start</button>
        <button id="timeStop" class="timeButton stop-color">stop</button>
        <button id="timeRefresh" class="timeButton refresh-color">refresh</button>
      </div>
        <p id="lesson-text" class="p-4 text-white">{{ $html->description }}</p>
      <div class="d-flex justify-content-center"><button id="prev-lesson" class="hidden">Prev</button><button id="next-lesson">Next Lesson</button></div>
    </div>

  <div id="box-mid" class="border border-default d-flex flex-column">
    <div id="editor"></div>
  </div>

  <div id="box-right" class="border border-default d-flex flex-column">
    
    <iframe id="editorIframe"></iframe>

  </div>
</div>


@endsection