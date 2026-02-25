<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content Wrapper --}}
    <div class="content-wrapper">
        @yield('content')
    </div>

    {{-- Footer (optional) --}}
    <footer class="main-footer">
        <strong>Copyright &copy; 2026</strong>
    </footer>

</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
