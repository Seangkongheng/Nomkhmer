<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link href="../admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


  <div class="wrapper ">
      @include('layouts.inc.sidebar')

      <div class="main-panel">
          @include('layouts.inc.navbar')
          <div class="content">
             @yield('content')

          </div>
          @include('layouts.inc.footer')
      </div>
  </div>
    <!--   Core JS Files   -->
  <script src="/admin/js/jquery.min.js"></script>
  <script src="/admin/js/popper.min.js"></script>
  <script src="/admin/js/bootstrap-material-design.min.js"></script>
  <script src="/admin/js/perfect-scrollbar.jquery.min.js"></script>


  {{-- sweet-alert --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if(session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    
  @endif
  @yield('scripts')
</body>
</html>
