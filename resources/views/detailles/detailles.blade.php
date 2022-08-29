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
    <!-- Page Banner Start -->
    <div class="section page-banner-section">
        <div class="shape-2"></div>
        <div class="container">
            <div class="page-banner-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Page Banner Content Start -->

                            <h2 class="title">Event Single</h2>
                            <ul class="breadcrumb justify-content-center">


                            </ul>
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                    <li class="breadcrumb-item btn mt-5  "><a href="{{ route('home') }}">Home</a></li>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Event Single Start -->
    <div class="meeta-event-single section-padding">
        <div class="container">
            <div class="meeta-event-single-wrap">
                <div class="row">

                    <div class="col-lg-8">
                        <!-- Event Single Content Start -->
                        <div class="event-single-content">
                            <!-- Video Start -->
                            <div class="meeta-video-section-2">

                                <div class="video-img text-center"
                                    style="background-image: url({{ asset($events->image) }});">
                                    <!-- Section Title Start -->
                                    <div class="meeta-section-title-2 section-title-4">
                                        <h2 class="main-title">Digital Workshop <br> Conferencee 2021</h2>
                                    </div>
                                    <!-- Section Title End -->
                                    <a class="popup-video" href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk"><i
                                            class="fas fa-play"></i></a>
                                </div>

                            </div>
                            <!-- Video End -->
                            <p>{{ $events->content }}</p>
                            <div class="event-single-item">
                                <h3 class="title">Event Speakers</h3>
                                <div class="speakers-content-wrap">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-7.jpg"
                                                            alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Mike Fermalin</h3>
                                                        <span class="designation">Lead Speaker</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-8.jpg"
                                                            alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Megan Fox</h3>
                                                        <span class="designation">Graphic Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-9.jpg"
                                                            alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Joakim Ken</h3>
                                                        <span class="designation">Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-single-item">
                                <h3 class="title">Event Sponsor</h3>
                                <div class="meeta-event-sponsors-3">
                                    <!-- Sponsor Start -->
                                    <div class="meeta-sponsor-wrap">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-1.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-2.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-3.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-4.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-5.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-6.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img
                                                            src="{{ asset('assets/images/logo-sm-7.png') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/brand-logo-1.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sponsor End -->
                                </div>
                            </div>
                        </div>
                        <!-- Event Single Content End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Event Single Sidebar Start -->
                        <div class="event-single-sidebar">

                            <div class="btn-price">
                                <a class="btn btn-primary" href="price.html">Buy Your Ticket</a>
                                <div class="price">
                                    {{-- <span><sup>$</sup>{{ $events->prix }}</span> --}}

                                    <select id="prix" class="form-control" name="">
                                        <option class="disabled">Price</option>
                                        <option>{{ $events->prix }}</option>
                                        <option>{{ $tickets->ticket_price_1 }}</option>
                                        <option>{{ $tickets->ticket_price_2 }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sidebar-item">

                                <div class="event-details">
                                    <h3 class="sidebar-title">Details</h3>
                                    <ul>
                                        <li>
                                            <h5 class="title">Start:</h5>
                                            <p>{{ $events->date_debut }}</p>
                                        </li>
                                        <li>
                                            <h5 class="title">End:</h5>
                                            <p>{{ $events->date_fin }}</p>
                                        </li>
                                        <li>
                                            <h5 class="title">Location :</h5>
                                            <p>{{ $events->villes->name }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="event-map">
                                    <h3 class="sidebar-title">Location Map</h3>
                                    <div class="google-map">
                                        <iframe id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Single Sidebar End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Single End -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/back-to-top.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>



</html>
