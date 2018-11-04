<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SJCN') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->

    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

        <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Super Jedi Code Ninjas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ $active == '/' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item{{ $active == 'myclasses' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ action('myclasses@index') }}">My Classes</a>
                </li>
                <li class="nav-item{{ $active == 'about' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ action('AboutController@index') }}">About</a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item {{ $active == '/login' ? ' active' : '' }}">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item {{ $active == '/register' ? ' active' : '' }}">
                          @if (Route::has('register'))
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          @endif
                      </li>
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
            </div>
          </nav>

        <main class="m-0">
            @yield('content')
        </main>
    </div>
      <footer class="d-flex align-items-center justify-content-center" id="footers">
          <span class="text-white">Italian-American Productions, LLC.</span>
      </footer>
      <script src="{{ url('https://unpkg.com/split.js/split.min.js') }}"></script>
      <script src="{{ asset('js/lessons.js') }}" defer></script>
</body>
</html>
