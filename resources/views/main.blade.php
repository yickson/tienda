<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mi tienda') }}</title>
    <!-- Styles -->
    <script defer src="{{asset('js/app.js')}}"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<!--Nav-->
<div id="app">
    @include('partials.nav-old')
    <div class="container">
        @yield('content')
    </div>
</div>
@include('partials.footer')

</body>
</html>
