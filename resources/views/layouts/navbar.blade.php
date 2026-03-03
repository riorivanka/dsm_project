<style>
    .navbar-nav .nav-item .nav-link:hover {
        background-color: rgba(0, 150, 167, 0.3) !important; 
        color: #ffffff !important;
    }
    .nav-link::after {
        display: none !important;
    }
</style>

<nav class="main-header navbar navbar-expand navbar-dark border-bottom-0 shadow-sm sticky-top" style="background-color: #fc7a2f;">
    <div class="container-fluid px-md-4">
        <div style="display: flex; width: 100%; align-items: center;">
            
            <img src="{{ asset('assets/logo4.webp') }}" alt="Logo" style="height: 38px; width: auto; border: 1px solid #ffffff; border-radius: 8px; box-shadow: 0 0 0 0.5px #ffffff;">
            
            <a href="/home" class="navbar-brand d-flex align-items-center">
                </a>

            <ul class="navbar-nav ml-2">
                <li class="nav-item">
                    <a href="/home" class="nav-link" style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 15px; {{ Request::is('/', 'home') ? 'background-color: #0097a7; font-weight: 700; pointer-events: none; cursor: default; box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);' : '' }}">
                        <i class="fas fa-tachometer-alt mr-2"></i>Overview
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/new_initiative" class="nav-link" style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 15px; {{ Request::is('new_initiative') ? 'background-color: #0097a7; font-weight: 700; pointer-events: none; cursor: default; box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);' : '' }}">
                        <i class="fas fa-file-alt mr-2"></i>New Initiative
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a href="#" class="nav-link" style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 14px; opacity: 0.9;">
                        <i class="fas fa-book mr-2"></i>User Manual
                    </a>
                </li>

                <li class="nav-item">
                    <button type="submit" class="nav-link btn btn-link border-0" style="transition: all 0.2s ease-in-out; padding: 8px 18px; color: #ffffff; border-radius: 6px; margin: 0 4px; display: flex; align-items: center; font-size: 14px; opacity: 0.9; cursor: pointer;">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </li>
            </ul>

        </div>
    </div>
</nav>