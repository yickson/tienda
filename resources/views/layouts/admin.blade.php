<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin | Tienda</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('partials.admin.nav')
    @include('partials.admin.sidebar')
    @include('partials.admin.breadcrumb')
    <!-- /.content-wrapper -->
    @yield('content')
    <!-- Main Footer -->
    @include('partials.admin.footer')
</div>

<!-- jS -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Gráficas Demo -->
<script src="{{ asset('js/chart.js') }}"></script>
</body>
</html>
