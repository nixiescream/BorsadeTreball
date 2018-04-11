<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="{{ asset('vendor/simple-line-icons.min.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body class="app flex-row align-items-center">
        @yield('content')
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('javascript/creative.min.js') }}"></script>
        <script src="{{ asset('vendor/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/pace.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.min.js') }}"></script>
        <!--<script src="{{ asset('javascript/app.js') }}"></script>-->
    </body>
</html>
