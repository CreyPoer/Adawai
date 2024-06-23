<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ADAWAI</title>
        <link href="{{ asset('css/dashboard/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <div class="border-end" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom"><i class="fas fa-address-book"></i> <strong class="fw-bold">ADAWAI</strong></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="#!"><i class="fas fa-house-user"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fas fa-user-tie"></i> Pegawai</a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
                    <div class="container-fluid ">
                        <button class="btn btn-outline-dark rounded-5" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown d-flex justify-content-center">
                                    <a href="" class="btn btn-outline-dark"><strong class="fw-bold">LOGOUT <i class="fas fa-door-open"></i></strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                    <p>
                        Make sure to keep all page content within the
                        <code>#page-content-wrapper</code>
                        . The top navbar is optional, and just for demonstration. Just create an element with the
                        <code>#sidebarToggle</code>
                        ID which will toggle the menu when clicked.
                    </p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/dashboard/scripts.js') }}"></script>
    </body>
</html>
