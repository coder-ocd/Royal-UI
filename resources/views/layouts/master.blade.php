<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/vendor.bundle.base.css') }}">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" />

</head>

<body>
    

    @include('partials._navbar')

    <!-- container-scroller -->

    @yield('content')

    <!-- plugins:js -->

    @include('partials._footer')


    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>

    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>


    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src=" {{ asset('js/off-canvas.js') }}"></script>

    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>

    <script src="{{ asset('js/template.js') }}"></script>

    <script src="{{ asset('js/todolist.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->


    <!-- End custom js for this page-->
</body>

</html>
