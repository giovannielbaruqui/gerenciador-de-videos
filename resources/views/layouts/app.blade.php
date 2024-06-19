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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-1">
            <div class="container">
                <a class="navbar-brand fs-6" href="{{ url('/home') }}">
                    Página Inicial
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tags</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Atores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Estudios</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        <!-- Search Form - Visible on Larger Screens -->
                        @auth
                            <li class="nav-item d-none d-md-block">
                                <form class="d-flex input-group w-auto">
                                    <input
                                      type="search"
                                      class="form-control rounded border-none"
                                      placeholder="Buscar"
                                      aria-label="Search"
                                      aria-describedby="search-addon"
                                    />
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </li>
                        @endauth

                        <!-- Search Button - Visible on Small Screens -->
                        @auth
                            <li class="nav-item d-md-none ms-auto">
                                <button class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#searchCollapse" aria-expanded="false" aria-controls="searchCollapse"><i class="bi bi-search"></i></button>
                            </li>
                        @endauth

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle py-0" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <!-- Collapsible Search Form for Small Screens -->
        @auth
            <div class="collapse" id="searchCollapse">
                <div class="container py-2">
                    <form class="d-flex input-group w-auto">
                        <input
                          type="search"
                          class="form-control rounded"
                          placeholder="Buscar"
                          aria-label="Search"
                          aria-describedby="search-addon"
                        />
                        <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
