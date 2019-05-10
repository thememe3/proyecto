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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="align-items-center ">
                        <header class="">
                            <center><h1 class="">Bienvenido a SGPC</h1></center>
                        </header>
                        <div class="modal-header">
                            <img class="img-fluid"  src="{{asset('images/logo_utj.png')}}" alt="">
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                                        Consultar fechas
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                                        Iniciar sesión
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
