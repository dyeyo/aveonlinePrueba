<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-material-design.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
</head>
<body>


    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                Bienvenido <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <img src="{{'images/sidebar_usuario-corporativo.png'}}" alt="UserIcon">
                </figure>

            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="{{route('producto.index')}}">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="{{route('producto.create')}}">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Agregar Producto
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>

            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/material.min.js')}}"></script>
    <script src="{{asset('js/ripples.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    <script>
        $.material.init();
    </script>
</body>
</html>
