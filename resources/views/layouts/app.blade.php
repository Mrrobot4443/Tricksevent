<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    @include('layouts.menu')
    <br>
    <br>
    @yield('content')

    <br>
    <br>
    <br>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
    <!-- JS
        ============================================ -->

    <!-- Modernizer & jQuery JS -->
    @include('layouts.footer')
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <script src="{{asset ('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{asset ('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset ('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{asset ('assets/js/back-to-top.js') }}"></script>
    <script src="{{asset ('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset ('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{asset ('assets/js/waypoints.min.js') }}"></script>
    <script src="{{asset ('assets/js/aos.js') }}"></script>
    <script src="{{asset ('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('admin/vendor/quixnav/quixnav.min.js') }}"></script>
    <script src="{{ asset('admin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
    <!--endRemoveIf(production)-->
    <script src="{{ asset('admin/vendor/highlightjs/highlight.pack.min.js') }}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Main JS -->
    <script src="{{asset ('assets/js/main.js') }}"></script>

</body>



</html>
