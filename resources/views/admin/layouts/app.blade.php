<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dlab - Event Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset ('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

@include('admin.layouts.top_menu')
@include('admin.layouts.side_bar')

@yield('content')

    <script src="{{asset ('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset ('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset ('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('admin/vendor/quixnav/quixnav.min.js') }}"></script>
    <script src="{{asset ('admin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
    <!--endRemoveIf(production)-->

    <!-- Daterange picker library -->
    <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>

    <script src="{{asset ('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/dashboard-2.js') }}"></script>


</body>


</html>
