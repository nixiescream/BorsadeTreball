<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Dashboard</title>

  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="{{ secure_asset('vendor/simple-line-icons.min.css') }}" rel="stylesheet">

  <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('css/edit.css') }}" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  @yield('header')

  <div class="app-body">

    @yield('sidebar')

    <main class="main">

     @yield('breadcrumb')

      <div class="container-fluid">
        <div>
        @yield('content')
        </div>
      </div>
    </main>

   @yield('aside')

  </div>

  @yield('footer')

  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <!--<script src="{{ secure_asset('vendor/jquery.min.js') }}"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--<script type="text/javascript" src="{{ secure_asset('javascript/app.js') }}"></script>-->
  <script src="{{ secure_asset('vendor/popper.min.js') }}"></script>
  <script src="{{ secure_asset('vendor/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('vendor/pace.min.js') }}"></script>

  <script src="{{ secure_asset('vendor/Chart.min.js') }}"></script>
  <script src="{{ secure_asset('javascript/editable.js') }}"></script>
  <!--<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>-->
  <!--<script src="{{ secure_asset('js/app.js') }}"></script>-->


</body>
</html>
