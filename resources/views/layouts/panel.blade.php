<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Dashboard</title>

  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="{{ asset('vendor/simple-line-icons.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/edit.css') }}" rel="stylesheet">

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

  <script src="{{ asset('vendor/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendor/pace.min.js') }}"></script>

  <script src="{{ asset('vendor/Chart.min.js') }}"></script>
  <script src="{{ asset('javascript/app.js') }}"></script>
  <!--<script src="{{ asset('js/app.js') }}"></script>-->


</body>
</html>
