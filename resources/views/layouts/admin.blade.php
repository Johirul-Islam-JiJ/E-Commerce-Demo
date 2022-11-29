<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <link rel="stylesheet" href="{{ asset('css/custom/material-dashboard.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div id="app">

            <div class= "wrapper" >
                @include('layouts.inc.sidebar')
            </div>
            <div class = "main-panel">
                @include('layouts.inc.adminnav')
            </div>
            <div class= "content" >
                @yield('content')
            </div>

            @yield('scripts')
    </div>
</body>
</html>
