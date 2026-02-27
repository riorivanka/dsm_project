<nav class="main-header navbar navbar-expand navbar-dark border-bottom-0 shadow-sm sticky-top"
     style="background-color: #fc7a2f;">

    <style>
        .main-header .nav-link {
            transition: all 0.2s ease-in-out;
            padding: 8px 18px !important;
            color: #ffffff !important;
            border-radius: 6px;
            margin: 0 4px;
            display: flex;
            align-items: center;
        }

        .brand-logo-custom {
            height: 38px;
            width: auto;
            border: 1px solid #ffffff; 
            border-radius: 8px;
            box-shadow: 0 0 0 0.5px #ffffff;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: rgba(0, 150, 167, 0.3) !important; 
            color: #ffffff !important;
        }

        .nav-item.active-page .nav-link {
            background-color: #0097a7 !important; 
            color: #ffffff !important;
            font-weight: 700 !important;
            pointer-events: none; 
            cursor: default;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-link::after {
            display: none !important;
        }

        .ml-auto .nav-link {
            opacity: 0.9;
        }
    </style>

    <a href="/home" class="navbar-brand d-flex align-items-center pl-3">
        <img src="{{ asset('assets/logo4.webp') }}" alt="Logo" class="brand-logo-custom">
    </a>

    <ul class="navbar-nav ml-2">
        <li class="nav-item {{ Request::is('home') ? 'active-page' : '' }}">
            <a href="/home" class="nav-link" style="font-size: 15px;">
                <i class="fas fa-tachometer-alt mr-2"></i>Overview
            </a>
        </li>

        <li class="nav-item {{ Request::is('new_initiative') ? 'active-page' : '' }}">
            <a href="/new_initiative" class="nav-link" style="font-size: 15px;">
                <i class="fas fa-file-alt mr-2"></i>New Initiative
            </a>
        </li>

        <li class="nav-item {{ Request::is('print_initiative') ? 'active-page' : '' }}">
            <a href="/print_initiative" class="nav-link" style="font-size: 15px;">
                <i class="fas fa-print mr-2"></i>Initiative Output
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto align-items-center pr-3">
        <li class="nav-item">
            <a href="#" class="nav-link" style="font-size: 14px;">
                <i class="fas fa-book mr-2"></i>User Manual
            </a>
        </li>

        <li class="nav-item">
            <button type="submit" class="nav-link btn btn-link border-0"
                    style="font-size: 14px; cursor: pointer;">
                <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </button>
        </li>
    </ul>
</nav>