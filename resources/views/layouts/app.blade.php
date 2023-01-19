<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js' defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
</head>
<body>
    <div id="app">
        <nav class="container-md navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    COM AGENCY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class='mx-2'>
                            <a href="{{ url('/') }}">
                                Accueil
                            </a>
                        </li>
                        <li class='mx-2'>
                            <a href="{{ url('/services') }}">
                                Nos Services
                            </a>
                        </li>
                        <li class='mx-2'>
                            <a href="{{ url('/about') }}">
                                A propos
                            </a>
                        </li>
                        <li class='mx-2'>
                            <a href="{{ url('/contact') }}">
                                Envoyez nous un message
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-md py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
