<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengurusan Stres</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(150deg, #168de2, #ff9930);
                color: #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                
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
                font-family: 'Raleway', sans-serif;   
                border-top: double;
                border-bottom: double;
               
            }

            .title {
                font-size: 84px;
                font-weight: 300;
                text-shadow: 3px 2px #000; 
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }

            .top-right > a:hover{
                color: #000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links" >
                    @if (Auth::check())
                        <a href="{{ Auth::user()->homeUrl() }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Log Masuk</a>
                        <a href="{{ url('/register') }}">Pendaftaran</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    E-Profiling Pengurusan Stres
                </div>
            </div>
        </div>
    </body>
</html>
