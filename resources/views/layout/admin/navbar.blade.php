<nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white fw-bold small">Admin</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset('assets/admin_icon.png') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn dropdown-item btn-sm"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> <strong>Logout</strong></button>
                </form>
        </li>

    </ul>

</nav>
