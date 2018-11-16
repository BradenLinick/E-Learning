@extends('layouts.app', ['active' => 'lessons'])

@section('content')

<div id="lesson-container" class="d-flex">
  <div id="box-left" class="border border-default d-flex flex-column">
    <div id="jumbo-mini">
      <h3 class="text-white text-left m-2">Lesson</h3>
    </div>
    <div class="timeContainer">
      <h1><time class="time">00:00:00</time></h1>
      <button id="timeStart" class="timeButton">start</button>
      <button id="timeStop" class="timeButton">stop</button>
      <button id="timeRefresh" class="timeButton">refresh</button>
    </div>
    <p class="p-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tempora impedit obcaecati quis temporibus officia iusto inventore, mollitia nemo, sequi nobis ducimus! Veritatis quo incidunt eaque ducimus impedit molestiae temporibus est perferendis sint autem! Deleniti eum facere voluptatem, beatae quos omnis sunt veritatis? Officiis deserunt velit aspernatur delectus amet reiciendis?</p>
    <p class="p-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tempora impedit obcaecati quis temporibus officia iusto inventore, mollitia nemo, sequi nobis ducimus! Veritatis quo incidunt eaque ducimus impedit molestiae temporibus est perferendis sint autem! Deleniti eum facere voluptatem, beatae quos omnis sunt veritatis? Officiis deserunt velit aspernatur delectus amet reiciendis?</p>
    <p class="p-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tempora impedit obcaecati quis temporibus officia iusto inventore, mollitia nemo, sequi nobis ducimus! Veritatis quo incidunt eaque ducimus impedit molestiae temporibus est perferendis sint autem! Deleniti eum facere voluptatem, beatae quos omnis sunt veritatis? Officiis deserunt velit aspernatur delectus amet reiciendis?</p>
    <p class="p-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tempora impedit obcaecati quis temporibus officia iusto inventore, mollitia nemo, sequi nobis ducimus! Veritatis quo incidunt eaque ducimus impedit molestiae temporibus est perferendis sint autem! Deleniti eum facere voluptatem, beatae quos omnis sunt veritatis? Officiis deserunt velit aspernatur delectus amet reiciendis?</p>
    <p class="p-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tempora impedit obcaecati quis temporibus officia iusto inventore, mollitia nemo, sequi nobis ducimus! Veritatis quo incidunt eaque ducimus impedit molestiae temporibus est perferendis sint autem! Deleniti eum facere voluptatem, beatae quos omnis sunt veritatis? Officiis deserunt velit aspernatur delectus amet reiciendis?</p>
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