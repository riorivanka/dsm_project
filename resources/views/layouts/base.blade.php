<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSM Dashboard</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">

    {{-- 1. LOAD SEMUA CSS DISINI (Hanya Sekali) --}}
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Hapus container disini agar Login bisa Full Screen --}}
    @yield('content')

    {{-- 2. LOAD SEMUA JS DISINI (Hanya Sekali) --}}
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/sweetalert2/sweetalert2.min.js') }}"></script>
</body>
</html>