@push('styles')
<style>
    .navbar-nav .nav-item .nav-link:hover {
        background-color: rgba(0, 150, 167, 0.3) !important;
        color: #ffffff !important;
    }
    .nav-link::after {
        display: none !important;
    }
</style>
@endpush

<nav class="main-header navbar navbar-expand navbar-dark border-bottom-0 shadow-sm sticky-top" style="background-color: #fc7a2f;">
    <div class="container-fluid px-md-4">
        <div style="display: flex; width: 100%; align-items: center;">

            <img src="{{ asset('assets/logo4.webp') }}" alt="Logo" width="120" height="38" style="height: 38px; width: auto; border: 1px solid #ffffff; border-radius: 8px; box-shadow: 0 0 0 0.5px #ffffff;">

            <a href="/" class="navbar-brand d-flex align-items-center"></a>

            <ul class="navbar-nav ml-2">

                <li class="nav-item">
                    <a href="{{ session('role_akses') == 'admin' ? route('home') : route('overview_user') }}"
                       class="nav-link"
                       style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 15px; {{ Request::is('/', 'home', 'overview_user') ? 'background-color: #009ec3; font-weight: 700; pointer-events: none; cursor: default; box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);' : '' }}">
                        <i class="fas fa-tachometer-alt mr-2"></i>Overview
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('new_initiative') }}"
                       class="nav-link"
                       style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 15px; {{ Request::is('new_initiative') ? 'background-color: #009ec3; font-weight: 700; pointer-events: none; cursor: default; box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);' : '' }}">
                        <i class="fas fa-file-alt mr-2"></i>New Initiative
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto align-items-center">

                <li class="nav-item">
                    <span class="nav-link" style="padding: 8px 18px; color: #ffffff; margin: 0 4px; display: flex; align-items: center; font-size: 14px; font-weight: 600; cursor: default;">
                        <i class="fas fa-user-circle mr-2"></i>
                        Halo, {{ Auth::check() ? Auth::user()->name : (session('nama') ?? 'User') }}
                    </span>
                </li>

                <li class="nav-item">
                    <button type="button" onclick="handleLogout()" class="nav-link btn btn-link border-0" style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 14px; opacity: 0.9; cursor: pointer;">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </li>
            </ul>

        </div>
    </div>
</nav>

<form id="logout-form-manual" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

@push('scripts')
<script src="{{ asset('dist/js/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
function handleLogout() {
    Swal.fire({
        title: 'Konfirmasi Keluar',
        text: "Apakah Anda yakin ingin logout?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FF0000',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Logout!',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form-manual').submit();
        }
    })
}
</script>
@endpush
