@extends('layouts.app', ['active' => 'lessons'])


@section('styles')
  <link href="{{ asset('css/editor.css') }}" rel="stylesheet">
@endsection


@section('content')


<div data-lesson="1" id="lesson-container" class="d-flex">
  <div id="box-left" class="border border-default d-flex flex-column">
    <div id="jumbo-mini">
      <h3 class="text-white text-left m-2">Lesson</h3>
    </div>
    {{-- @foreach ($html[0] as $htmlLessons)
    <p>{{ $htmlLessons->description }}</p>
    @endforeach --}} 
    {{-- ** number for array needs to be a counter variable. Logic must be written in a document other than this one ** --}}
    <p id="lesson-text" class="p-4 text-white">{{ $html->description }}</p>
    
    <div class="d-flex justify-content-center"><button id="prev-lesson" class="hidden">Prev</button><button id="next-lesson">Next</button></div>
  </div>
  <div id="box-mid" class="border border-default d-flex flex-column">
    <div id="jumbo-mini-mid">

      <h3 class="text-dark text-left m-2">Code</h3>
    </div>
    <div id="editor"></div>
  </div>
  <div id="box-right" class="border border-default d-flex flex-column">
    <div id="jumbo-mini-right">
      <h3 class="text-white text-left m-2">Result</h3>
    </div>
    <iframe id="editorIframe"></iframe>

  </div>
</div>


@endsection