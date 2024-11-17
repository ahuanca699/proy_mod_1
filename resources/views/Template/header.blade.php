<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Tienda Virtual Alvaro HQ">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Alvaro HQ">
        <meta name="theme-color" content="#009688">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <title>@yield('template_title')</title>
        <!-- Main CSS-->
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/datepicker/jquery-ui.min.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <script src="https://kit.fontawesome.com/c16007db5b.js" crossorigin="anonymous"></script><!---iconoes en linea segun mi usuario-->
    </head>
    <body class="app sidebar-mini">
        <div id="divLoading" >
        <div>
            <img src="/images/loading.svg" alt="Loading">
        </div>
        </div>
        <!-- Navbar-->
        <header class="app-header">
            
            
            <a class="app-header__logo" href="/dashboard">{{ __('Cars') }}</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fas fa-bars"></i></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <x-responsive-nav-link class="dropdown-item" :href="route('profile.edit')">
                        <i class="fa fa-user fa-lg"></i> {{ __('Profile') }}
                    </x-responsive-nav-link>
                </li>
                
                <li>
                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link class="dropdown-item" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="fa fa-sign-out fa-lg"></i> {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </a></li>
                
            </ul>
            </li>
        </ul>
        </header>