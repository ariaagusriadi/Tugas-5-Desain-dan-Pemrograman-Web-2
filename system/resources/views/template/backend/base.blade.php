<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin</title>
    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    @include('template.backend.section.sidebar')


    <!-- Main content -->
    <div class="main-content" id="panel">
      @include('template.utils.notif')
        <!-- Topnav -->
        @include('template.backend.section.navbar')

        <!-- Page content -->

        @yield('content')

        {{-- footer --}}
        @include('template.backend.section.footer')
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ url('public/admin') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="{{ url('public/admin') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="{{ url('public/admin') }}/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
