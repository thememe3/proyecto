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
                                <center><h1 class="">Ingreso a SGPC</h1></center>
                            </header>
                            <div class="modal-header">
                                <img class="img-fluid"  src="{{asset('images/logo_utj.png')}}" alt="">
                            </div>
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"  id="basic-addon1">&nbsp;<center><i class="fa fa-user"></i>&nbsp;</center></span>
                                    </div>
                                    <input id="name" type="name" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Usuario" required autocomplete="name" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" for="password"  id="basic-addon1">&nbsp;<center><i class="fa fa-unlock-alt"></i>&nbsp;</center></span>
                                    </div>
                                    <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required autocomplete="current-password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Ingresar') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>
</html>
