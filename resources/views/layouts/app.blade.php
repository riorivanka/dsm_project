<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DSM Monitoring System - PT Sumber Indah Lestari">
    
    <link rel="icon" type="image/webp" href="{{ asset('assets/logo4.webp') }}">
    <title>DSM Monitoring</title>

    <link rel="preload" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}" as="style">

    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
    
    @stack('styles')
</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    {{-- Navbar --}}
    @include('layouts.navbar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer text-center">
        <strong>&copy; PT Sumber Indah Lestari {{ date('Y') }}</strong>
    </footer>

</div>

<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

@stack('scripts')

</body>
</html>