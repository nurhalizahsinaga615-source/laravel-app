<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Nyeblak Yuk') }}</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="d-flex" id="wrapper">
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-white">Nyeblak Yuk 🍜</div>

            <div class="list-group list-group-flush">
                <a href="{{ url('dashboard') }}" class="list-group-item list-group-item-action {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
                <a href="{{ url('pelanggan') }}" class="list-group-item list-group-item-action {{ Request::is('pelanggan') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i> Pelanggan
                </a>
                <a href="{{ url('menu') }}" class="list-group-item list-group-item-action {{ Request::is('menu') ? 'active' : '' }}">
                    <i class="bi bi-egg-fried me-2"></i> Menu
                </a>
                <a href="{{ url('pesanan') }}" class="list-group-item list-group-item-action {{ Request::is('pesanan') ? 'active' : '' }}">
                    <i class="bi bi-cart-check me-2"></i> Pesanan
                </a>

                <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>

            <div class="dashboard-main-area">
                <div class="container py-4 content-inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
       
        document.getElementById("menu-toggle").addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("wrapper").classList.toggle("toggled");
        });
    </script>

</body>
</html>