<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Borsa de treball</title>
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->
        <script src="https://use.fontawesome.com/2898b84aa2.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/enborsat.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        @yield('header')
        @yield('content')
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('javascript/creative.min.js') }}"></script>
        <script src="{{ asset('javascript/app.js') }}"></script>
    </body>
</html>
