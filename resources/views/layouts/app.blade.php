<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{--AGREGANDO ESTILOS --}}
    @yield('css')
    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md " style="background-color: #5E72E4;">
            <div class="container">
                <a href="{{ url('/') }}"><img
                        src="https://uploads-ssl.webflow.com/63bdb3d2bcdc8434481e2da0/63cbeccffeacbc461bff97c7_logo%20horizontal.svg"
                        loading="lazy" width="120px" height="40px" alt="" class="image-59"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <livewire:cart />
                        </li>

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                       
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff" href="{{ route('register') }}">{{ __('Register')
                                }}</a>
                        </li>

                        {{-- <livewire:search> --}}

                        {{-- BUSCADOR QUE APARECE EN EL MENU DE REGISTRO --}}

                        {{-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search"   placeholder="Search" aria-label="Search">
                            <button class="btn bs-info-text-emphasis" style="color: white" type="submit"><i class="fas fa-search"></i></button>
                        </form> --}}

                        @endif


                       
                          
                        @else
                        {{-- BUSCADOR QUE APARECE EN EL NAVIGATION ANTES DEL NOMBRE --}}
                        {{-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bs-info-text-emphasis" style="color: white" type="submit"><i class="fas fa-search"></i></button>
                        </form> --}}
                        
                        <li class="nav-item dropdown">
                            <a style="color: #ffffff" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                      
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>


    {{-- @include('layouts.scripts')
    @yield('javascript') --}}


    @livewireScripts

    <script src="https://use.fontawesome.com/293dbc87e8.js"></script>







</body>

</html>