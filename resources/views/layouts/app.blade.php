<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Profifling Pengurusan Stres') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    html, body {
                background: linear-gradient(150deg, #168de2, #ff9930);
                color: #34495e;
                font-family: Arial, Helvetica, sans-serif;;
                font-size: 16px;
                height: 100vh;
                margin: 0;
            }
    .navbar-brand{
        color: #FFFF00;
        
        
    }

    li a:hover:not(.active){
        background-color: #000;
    }

    .active{
        background-color: #000;
    }
    .navbar-right > li > a{
        color: #FFFF00;
        display:block;
    }

    div.navbar-header a:hover{
        color: #fff;
    }
    
    .dropdown-menu > li > a{
        color: #ffff00;
        display:block;
    }

    .dropdown-menu{
        background-color: rgb(44, 62, 80);
    }
        
    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
        color: yellow;
    }
    .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
        background-color: rgb(44, 62, 80);
}
    
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light" style="background-color: #2c3e50">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'E-Profifling Pengurusan Stres') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="{{ Request::is('login') ? 'active' : ''}}"><a href="{{ route('login') }}">LOG MASUK</a></li>
                            <li class="{{ Request::is('register') ? 'active' : ''}}"><a href="{{ route('register') }}">PENDAFTARAN</a></li>
                        @else

                            
                            @if (Auth::user()->is_admin)
                           
                            <li class="{{ is_equal_url('admin.home2') ? 'active' : ''}}"><a  href="{{ route('admin.home2') }}">LAMAN UTAMA {{ Request::is('admin.home2') }}</a></li>
                            <li class="{{ is_equal_url('admin.users.index') ? 'active' : ''}}"><a  href="{{ route('admin.users.index') }}">SENARAI PENGGUNA</a></li>
                            <li class="{{ is_equal_url('admin.users.chart') ? 'active' : ''}}"><a href="{{ route('admin.users.chart') }}">CARTA</a></li>
                            @else
                            <li class="{{ is_equal_url('home') ? 'active' : ''}}"><a href="{{ route('home') }}">LAMAN UTAMA</a></li>
                            <li class="{{ is_equal_url('tests.index') ? 'active' : ''}}"><a href="{{ route('tests.index') }}">SOALAN</a></li>
                            <li class="{{ is_equal_url('users.chart') ? 'active' : ''}}"><a href="{{ route('users.chart') }}">CARTA</a></li>
                            <li class="{{ is_equal_url('users.video') ? 'active' : ''}}"><a href="{{ route('users.video') }}">VIDEO</a></li>
                            @endif

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Log Keluar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
