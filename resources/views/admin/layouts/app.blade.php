<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Plugins css -->
        <link href="{{asset ('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap css -->
        <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset ('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="{{ asset('assets/js/head.js') }}"></script>

    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>


        @include('admin.layouts.top_menu')
        @include('admin.layouts.menu')
        @yield('content')
        <!-- Vendor js -->
        <script src="{{asset ('assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{asset ('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{asset ('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{asset ('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset ('assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js-->
        <script src="{{asset ('assets/js/app.min.js') }}"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 14:34:33 GMT -->
</html>
