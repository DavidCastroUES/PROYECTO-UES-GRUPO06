
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/gestion') }}">Gestión</a>
                    @else
                        <a href="{{ url('/login') }}">Ingresar</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div>
                    <h1>SISTEMA DE GESTION ESCOLAR</h1>
                    <h3>CENTRO ESCOLAR CATOLICO SANTO TOMAS</h3> 
                    <br>
                    <div>
                    <img src="{{URL::asset('/img/logo.png')}}" alt="profile Pic" height="200" width="200"></img>
                </div>
                <div>
                        <h4>
                            <i>
                            Calle Alberto Masferrer, Contiguo a Iglesia parroquial, Santo Tomás
                            </i>
                        </h4> 
                </div>
                 <div>
                        <h4>
                            <i>
                            Teléfono: 2220-9942, correo eléctronico: catolicosantotomas@gmail.com
                            </i>
                        </h4> 
                </div>
                <br>
                </div>
                <br>
            </div>
        </div>
    </body>
</html>
