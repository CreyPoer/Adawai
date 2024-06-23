<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADAWAI App</title>
    <script src="{{ asset('vendor/fontawesome/css/all.css') }}"></script>
    <script src="{{ asset('vendor/fontawesome/js/all.js') }}"></script>

    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/guest/navbar.css') }}">
    @stack('styles')

</head>

<body class="container-fluid m-0 p-0">

    @include('layout.guest.header')
    @yield('konten-guest')
    @include('layout.guest.footer')

    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    @stack('scripts')
    <script src="{{ asset('js/guest/app.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/guest/navbar.js') }}" crossorigin="anonymous"></script>
</body>

</html>
