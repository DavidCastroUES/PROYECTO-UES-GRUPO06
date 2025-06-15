<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
      <style>
         ul {list-style-type:none; margin:0; padding:0;}
         li {display:inline;}
         a.active {background:#191919;}
      </style>
   </head>
   <body>
      <div id="app" style="overflow-y: auto; overflow-x: hidden;">
         <nav class="navbar navbar-static-top navbar-default navbar-inverse "role="navigation" >
            <div class="container">
               <div class="navbar-header">
                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/gestion') }}">SIGCECST</a>
               </div>
               <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                     &nbsp;
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                     <!-- Authentication Links -->
                     @if (Auth::guest())
                     <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Igresar</a></li>
                     <li><a href="{{ route('register') }}">Registrarse</a></li>
                     @else
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" ></span>
                        {{ Auth::user()->name }} <span class="caret" ></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                           <li>
                              <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                              Cerrar Sesión
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                              </form>
                           </li>
                        </ul>
                     </li>
                     @endif
                  </ul>
                  <ul>
                     @if (Auth::guest())<br><br><br>
                     @else
                     <br><br><br>
                     <nav class=" nav navbar-collapse " style="border-color: #222530;" >
                        <div class="container">
                           <div class="navbar-header">
                              <!-- Branding Image -->
                              <ul class="nav navbar-nav">
                                 <li><a href="{{ route('docentes.index') }}"><b>Docentes </b></a></li>
                                 <li><a href="{{ route('alumnos.index') }}"><b> Estudiantes </b></a></li>
                                 <li><a href="{{ route('grados.index') }}"><b>Grados</b></a></li>
                                 <li><a href="{{ route('materias.index') }}"><b>Materias</b></a></li>
                                 <li><a href="{{ route('asignaciones.index') }}"><b>Asignacion Docente - Grado</b></a></li>
                                 <li><a href="{{ route('asignacionAlumnosNotas.index') }}"><b>Asignacion Alumno - Grado</b></a></li>
                                 <li><a href="{{ route('notas.index') }}"><b>Gestion / Asignacion Notas</b></a></li>
                                 <li><a href="{{ route('asignacionNotas.index') }}"><b>Reporte de Notas</b></a></li>
                              </ul>
                           </div>
                        </div>
                     </nav>
                     @endif
                  </ul>
               </div>
            </div>
         </nav>
         <div class="container">
            @yield('content')
         </div>
         <br>
         <br>
         <br>
         <br>
         <div>
            <nav class=" navbar navbar-fixed-bottom" style="background-color: #99C0E8 ; padding-top: 10px;">

               <p> &emsp;<span class="glyphicon glyphicon-copyright-mark"></span> Centro Escolar Católico Santo Tomas, <?php echo date("Y");?></p>
            </nav>
         </div>
      </div>
      </div>
      <script>
         for (var i = 0; i < document.links.length; i++) {
             if (document.links[i].href == document.URL) {
                 document.links[i].className = 'active';
             }
         }
      </script>
   </body>
</html>