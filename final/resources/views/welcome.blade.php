<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.min.css">
        
    </head>
    <body>
      <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Super Jedi Code Ninjas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
      </nav>


      <div class="mw-50 container mt-5 d-flex">
        <div>
          <h2 class="text-white display-4">CodePen is a social development environment for front-end designers and developers.</h2>
          <h3 class="text-white">It’s the best place to build and deploy a website, show off your work, build test cases, and find inspiration.</h3>
        </div>

        {{-- register --}}
        
        <div class="p-5 jumbotron jumbotron d-flex flex-column justify-content-center align-items-center">
              <h4>Registration</h4>
              <form action="post">
                <label class="mt-2" for="first">First name: </label>
                <input type="text" name="first">
                <br>
                  <label class="mt-2" for="last">Last name: </label>
                  <input type="text" name="last">
                <br>
                  <label class="mt-2" for="email">Email: </label>
                  <input type="text" name="email">
                <br>
                  <label class="mt-2" for="confirm">Confirm Email: </label>
                  <input type="text" name="confirm">
                <br>
                  <input class="border rounded mt-3" type="submit" value="Submit">
              </form>
        </div>
      </div>

      <footer class="footer m-0" id="footers">
        <div class="container d-flex align-items-center">
          <p class="p-2 text-white">Italian-American Productions, LLC.</p>
        </div>
      </footer>
    </body>
</html>
