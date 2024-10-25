<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('icon/customer-service.png')}}" type="image/x-icon">
    <link rel="stylesheet" crossorigin href="{{asset('maze/assets/compiled/css/app.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('maze/assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('maze/assets/compiled/css/auth.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('maze/assets/compiled/css/iconly.css')}}">
    <style>
        .kon {
            width: 50px;
            height: auto !important;
        }
    </style>
</head>

<body>
    <script src="{{asset('maze/assets/static/js/initTheme.js')}}"></script>
    <div id="app">
        @include('input.sidebar')
        <div id="main" class="layout-navbar- navbar-fixed">
            @include('input.navbar')
            <div id="main-content">
                @yield('content')
            </div>
            @include('input.menu.footer')
        </div>
    </div>

    <script src="{{asset('maze/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('maze/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('maze/assets/compiled/js/app.js')}}"></script>   
<!-- Need: Apexcharts -->
    <script src="{{asset('maze/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('maze/assets/static/js/pages/dashboard.js')}}"></script>
</body>

</html>