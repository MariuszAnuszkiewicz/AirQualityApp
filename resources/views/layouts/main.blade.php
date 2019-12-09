<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AirQualityApp</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('site/jquery.js') }}" defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/researchParams.js') }}" defer></script>
    <script src="{{ asset('js/quantityAir.js') }}" defer></script>
    <script src="{{ asset('js/closeTable.js') }}" defer></script>
    <script src="{{ asset('js/runFunc.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">

</head>
<body class="bg-warning">
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
        </div>
    @endif

    <div class="content">
        <div class="board">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
