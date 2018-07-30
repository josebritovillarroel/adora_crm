<!doctype HTML>
<html lang="es">
  <head>
    <meta charset="utf8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href=" {{ asset('css/main.css') }} " rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,600" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 barra">
            <img src="/intento_crm_jose/public/img/adora.png" class=" mx-auto d-block " alt="">
          </div>
          <div class="col-md-10 barra">
            <div class="row">
              <div class="col-md-7 offset-md-1 ">
                <form method="GET" action="{{ route('projects.index') }}">
                  <div class="input-group my-2 ">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" name="title" required/>
                    <span class="input-group-append">
                      <button class="btn btn-primary btn-lg" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
              <div class="col-md-2 d-flex justify-content-end">
                <i class="fas fa-bell my-2" style="font-size:350%; color:white"></i>
              </div>
              <div class="col-md-1 ">
                <img src="{{ asset('uploads/' . Auth::user()->profile_picture) }}" height="50vh" width="50vw" class="rounded-circle my-2" alt="">
              </div>
              <div class="col-md-1 mt-2">
                <form action="{{ route ('logout') }} " method="post">
                  {{ csrf_field() }}
                  <button class="btn  btn-link" type="submit">
                    <h2> Salir </h2>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

      <div class="container-fluid" id="app">
        <div class="row">
          <div class="col-md-2 sidebar">
            <h3 class="side"><a href="{{route('bienvenido')}}">Bienvenido</a></h3>
            <h3 class="side"><a href="{{route('clients.index')}}"> Clientes</a></h3>
            <div id="lista">
              <h3 class="side" data-target="#projects-list">
                <a href="#">Todos los Proyectos </a>  
                <ul id="projects-list">
                  <li><a href="{{route('projects.index', ['interno' => 0 ] ) }}">Comerciales</a></li>
                  <li><a href="{{route('projects.index', ['interno' => 1 ] ) }}">Internos</a></li>
                  <li><a href="{{route('projects.index') }}"> Todos</a></li>
                </ul>
              </h3>
            </div>
            <h3 class="side"><a href="{{route('reminders.index')}}">Recordatorios</a></h3>
            <h3 class="side"><a href="{{ route('negociation.index')}}">Negociaciones</a></h3>
            <h3 class="side"><a src="https://mail.google.com/mail/u/0/#inbox">Email Corporativo</a></h3>
          </div>
          <div class="col-md-10 alto pt-5 scroll" id="style-7">
            @section('main')
            @show
          </div>
        </div>
      </div>
    <footer>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src=" {{ asset('js/main.js') }} "></script>
  </body>
</html>