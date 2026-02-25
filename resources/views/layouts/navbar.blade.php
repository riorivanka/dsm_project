<nav class="main-header navbar navbar-expand navbar-dark border-bottom-0 shadow-sm"
     style="background-color: #fc7a2f;">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/home" class="nav-link px-3" style="font-size: 16px; font-weight: 500;">
                <i class="fas fa-tachometer-alt mr-1"></i>Overview
            </a>
        </li>

        <li class="nav-item">
            <a href="/new_initiative" class="nav-link px-3" style="font-size: 16px; font-weight: 500;">
                <i class="fas fa-file-alt mr-1"></i>New Initiative
            </a>
        </li>

        <li class="nav-item">
            <a href="/print_initiative" class="nav-link px-3" style="font-size: 16px; font-weight: 500;">
                <i class="fas fa-print mr-1"></i>Initiative Output
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto align-items-center">

        {{-- User Manual Link --}}
        <li class="nav-item">
            <a href="#" class="nav-link px-3" style="font-size: 16px; font-weight: 500;">
                <i class="fas fa-book mr-1"></i> User Manual
            </a>
        </li>

        {{-- Logout Section --}}
        <li class="nav-item">
            {{-- <form action="{{ route('logout') }}" method="POST" class="m-0"> --}}
                {{-- @csrf --}}
                <button type="submit" class="nav-link btn btn-link border-0 px-3"
                        style="font-size: 16px; font-weight: 500; color: rgba(255,255,255,.8);">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </button>
            {{-- </form> --}}
        </li>

    </ul>
</nav>
