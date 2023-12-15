<!DOCTYPE html>
<html lang="en" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Visitor Management System" />
    <meta name="author" content="https://www.instagram.com/andhy.57" />
    <meta name="google" value="notranslate" />
    <title>Visitor Management System</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"> --}}
</head>
<body class="sb-nav-fixed">
    @include('layouts.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    {{-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> --}}
                    @yield('content')
                </div>
            </main>

            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
