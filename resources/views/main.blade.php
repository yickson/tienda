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
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <script defer src="{{asset('js/app.js')}}"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        #menu-toggle:checked + #menu {
            display: block;
        }
    </style>
</head>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

<!--Nav-->
@include('partials.nav')

<div id="app">
    @yield('content')
</div>

@include('partials.footer')

</body>
</html>
