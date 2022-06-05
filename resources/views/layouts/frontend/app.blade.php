<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Ethereal | {{ $title ?? '' }}</title>
    <link rel="icon" href="{{ asset('templates/frontend/clever') }}/img/core-img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    @stack('css')
</head>

<body>
   
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <header class="header-area">
        @include('layouts.frontend.navbar')
    </header>
    @yield('content')
    @include('layouts.frontend.footer')
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>