@extends('layouts.app')

@section('content')


    {{-- <!-- Mini Cart Start -->
    <div class="off-canvas">
        <div class="icon-close"></div>

        <!-- Mini Cart Box Start -->
        <div class="meeta-mini-cart-box">

            <div class="mini-cart-items">

                <div class="mini-cart-item">
                    <div class="mini-cart-item-image">
                        <a href="#"><img src="assets/images/cart/cart-1.jpg" alt="Cart"></a>
                    </div>
                    <div class="mini-cart-item-content">
                        <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and
                                Hidden Livestream </a></h4>
                        <p class="mini-cart-quantity">1 × $19.99</p>
                    </div>
                    <button class="btn-close"></button>
                </div>

                <div class="mini-cart-item">
                    <div class="mini-cart-item-image">
                        <a href="#"><img src="assets/images/cart/cart-2.jpg" alt="Cart"></a>
                    </div>
                    <div class="mini-cart-item-content">
                        <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and
                                Hidden Livestream </a></h4>
                        <p class="mini-cart-quantity">1 × $19.99</p>
                    </div>
                    <button class="btn-close"></button>
                </div>

                <div class="mini-cart-item">
                    <div class="mini-cart-item-image">
                        <a href="#"><img src="assets/images/cart/cart-3.jpg" alt="Cart"></a>
                    </div>
                    <div class="mini-cart-item-content">
                        <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and
                                Hidden Livestream </a></h4>
                        <p class="mini-cart-quantity">1 × $19.99</p>
                    </div>
                    <button class="btn-close"></button>
                </div>

            </div>

            <div class="mini-cart-sub-total">
                <p><strong>Subtotal:</strong> <span class="mini-cart-amount">$99.97</span></p>
            </div>
            <div class="mini-cart-sub-btn">
                <a class="btn btn-primary" href="#">View cart</a>
                <a class="btn btn-white" href="#">Checkout</a>
            </div>
        </div>
        <!-- Mini Cart Box End -->

    </div>
    <!-- Mini Cart End -->


    <!-- Offcanvas Start-->
    <div class="offcanvas offcanvas-start" id="offcanvasExample">
        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="index.html"><img src="assets/images/logo-4.png" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i
                    class="flaticon-close"></i></button>
        </div>

        <!-- Offcanvas Body Start -->
        <div class="offcanvas-body">
            <div class="offcanvas-menu offcanvas-menu-2">
                <ul class="main-menu">
                    <li class="active-menu"><a href="/">Home</a>

                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="speaker-one.html">Speakers 01</a></li>
                            <li><a href="speaker-.html">Speakers 02</a></li>
                            <li><a href="speaker-single.html">Speaker Single</a></li>
                            <li><a href="event-list.html">Event List</a></li>
                            <li><a href="event-single.html">Event Single</a></li>
                            <li><a href="schedule.html">Event Schedule</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="price.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="login-register.html">Login Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog Grid</a></li>
                            <li><a href="blog-standard.html">Latest News</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Offcanvas Body End --> --}}
    {{-- </div> --}}
    <!-- Offcanvas End -->

    <!-- Slider Section Start  -->
    <div class="meeta-hero-section-5 d-flex align-items-center"
        style="background-image: url(assets/images/bg/hero-5-bg.jpg);">
        <img class="image-1" src="assets/images/hero-5-img-1.png" alt="">
        <img class="image-2" src="assets/images/hero-5-img-2.png" alt="">
        <img class="shape-1" src="assets/images/shape/hero-5-shape-1.png" alt="">
        <img class="shape-2" src="assets/images/shape/hero-5-shape-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="title-wrap text-center">
                            <h2 class="title" data-aos-delay="700" data-aos="fade-up">Find event</h2>
                            <h3 class="sub-title" data-aos-delay="800" data-aos="fade-up">Awesome event,
                                conference & fest around you</h3>
                        </div>
                        <div class="search-form-wrap" data-aos-delay="900" data-aos="fade-up">
                            <div class="search-form-inner">
                                <form class="search-form" action="#">
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-search"></i> Event
                                            Title</label>
                                        <input type="text" placeholder="Type Event Name">
                                    </div>
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-list-alt"></i> Category</label>
                                        <select>
                                            <option value="0">Select Category</option>
                                            <option value="1">Arts & Crafts</option>
                                            <option value="2">Business</option>
                                            <option value="3">Education </option>
                                            <option value="4">Science </option>
                                            <option value="5">Sports & Travel</option>
                                        </select>
                                    </div>
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-map"></i> Location</label>
                                        <select>
                                            <option value="0">Select Location</option>
                                            <option value="1">Paris, FR</option>
                                            <option value="2">Melbourne, AUS</option>
                                            <option value="3">New York, NY</option>
                                            <option value="4">IAC Building, US</option>
                                            <option value="5">Moscow, RA</option>
                                        </select>
                                    </div>
                                    <div class="form-btn">
                                        <button class="search-btn"><i class="flaticon-loupe"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="popular-tag" data-aos-delay="1000" data-aos="fade-up">
                            <span class="label">Popular:</span>
                            <ul>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Sport</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Category Section Start -->
    <div class="meeta-category-section section-padding-02">
        <div class="container">
            <div class="meeta-category-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title">Browse by <span class="title-shape-1">Category</span></h2>
                </div>
                <!-- Section Title End -->
                <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2">
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item">
                            <a href="#"><img src="assets/images/cat-1.png" alt=""><span>Food
                                    Fest</span></a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item cat-1">
                            <a href="#"><img src="assets/images/cat-2.png"
                                    alt=""><span>Concert</span></a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item cat-2">
                            <a href="#"><img src="assets/images/cat-3.png" alt=""><span>Movie
                                    Fest</span></a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item cat-3">
                            <a href="#"><img src="assets/images/cat-4.png" alt=""><span>Magic
                                    Show</span></a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item cat-4">
                            <a href="#"><img src="assets/images/cat-5.png" alt=""><span>Art &
                                    Craft</span></a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Category Section End -->

    <!-- Trending Section Start -->
    <div class="meeta-trending-section section-padding">
        <div class="trending-shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
        <img class="trending-shape-2" src="assets/images/shape/trend-shape-2.png" alt="">
        <img class="trending-shape-3" src="assets/images/shape/trend-shape-3.png" alt="">
        <img class="trending-shape-4" src="assets/images/shape/trend-shape-4.png" alt="">
        <img class="trending-shape-5" src="assets/images/shape/trend-shape-5.png" alt="">
        <div class="container">
            <div class="meeta-trending-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title">Trending By <span class="title-shape-2">Cities</span></h2>
                </div>
                <!-- Section Title End -->
                <div class="meeta-trending-content-wrap meeta-trending-active slider-bullet">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <!-- Trending Item Start -->
                                <div class="trending-item">
                                    <div class="trending-thumb">
                                        <img src="assets/images/trending/trend-1.jpg" alt="">
                                        <div class="trending-city">
                                            <span class="city">Paris</span>
                                        </div>
                                        <div class="trending-content">
                                            <h3 class="title"><a href="#">Food Festival in summer night</a>
                                            </h3>
                                            <span class="date">23 Jun 2022<span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trending Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Trending Item Start -->
                                <div class="trending-item">
                                    <div class="trending-thumb">
                                        <img src="assets/images/trending/trend-2.jpg" alt="">
                                        <div class="trending-city">
                                            <span class="city">New York</span>
                                        </div>
                                        <div class="trending-content">
                                            <h3 class="title"><a href="#">Cultural summit <br> 2022</a>
                                            </h3>
                                            <span class="date">23 Jun 2022<span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trending Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Trending Item Start -->
                                <div class="trending-item">
                                    <div class="trending-thumb">
                                        <img src="assets/images/trending/trend-3.jpg" alt="">
                                        <div class="trending-city">
                                            <span class="city">Melbourne</span>
                                        </div>
                                        <div class="trending-content">
                                            <h3 class="title"><a href="#">Cycling fest summer 2022</a></h3>
                                            <span class="date">23 Jun 2022<span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trending Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Trending Item Start -->
                                <div class="trending-item">
                                    <div class="trending-thumb">
                                        <img src="assets/images/trending/trend-4.jpg" alt="">
                                        <div class="trending-city">
                                            <span class="city">Moscow</span>
                                        </div>
                                        <div class="trending-content">
                                            <h3 class="title"><a href="#">Concert for charity for children
                                                </a></h3>
                                            <span class="date">23 Jun 2022<span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trending Item End -->
                            </div>

                        </div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Section End -->

    <!-- Featured Section Start -->
    <div class="meeta-featured-section section-padding">
        <div class="shape-1"></div>
        <div class="shape-2" data-aos-delay="700" data-aos="zoom-in"></div>
        <div class="container">
            <div class="meeta-featured-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title"><span class="title-shape-1">Featured </span>Events</h2>
                </div>
                <!-- Section Title End -->
                <div class="meeta-event-featured">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-1.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>15</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-4">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-9.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>25</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-1">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-10.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>30</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-2">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-11.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>25</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-3">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-5.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>25</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-4">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-6.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>23</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-1">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-7.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>25</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-2">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Item Start -->
                            <div class="single-item">
                                <div class="featured-img">
                                    <a href="event-single.html"><img src="assets/images/featured/featured-8.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="date"><span>27</span>Sept</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <span class="category color-3">Art & Craft</span>
                                    <h3 class="title"><a href="event-single.html">Designers, Web developers &
                                            Digital artists</a></h3>
                                    <span class="meta"><i class="fas fa-map-marker-alt"></i> Sand diego,
                                        Canada</span>
                                </div>
                            </div>
                            <!-- Single Item End -->
                        </div>
                    </div>
                </div>
                <div class="featured-more text-center">
                    <a class="btn-2" href="event-single.html">More Featured Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Section End -->

    <!-- Project Start -->
    <div class="meeta-event-project section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="meeta-section-title section-title-4 text-center">
                <h2 class="main-title"><span class="title-shape-1">Upcoming</span> Events</h2>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Project Wrap Start -->
        <div class="meeta-event-project-wrap event-project-active slider-bullet">
            <div class="swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb"
                                style="background-image: url(assets/images/up-event-1.jpg);">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24"
                                            data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>
                                <a class="btn-2" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb"
                                style="background-image: url(assets/images/up-event-2.jpg);">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24"
                                            data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>
                                <a class="btn-2" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb"
                                style="background-image: url(assets/images/up-event-3.jpg);">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24"
                                            data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>
                                <a class="btn-2" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Project Wrap End -->
    </div>
    <!-- Project End -->

    <!-- Event Sponsors Start -->
    <div class="meeta-event-sponsors-4 meeta-event-sponsors-5 section-padding"
        style="background-image: url(assets/images/bg/sponsor-5-bg.jpg);">
        <div class="container">

            <!-- Section Title Start -->
            <div class="meeta-section-title section-title-4 text-center">
                <h2 class="main-title">Event by <shape class="title-shape-1">Organizer</shape>
                </h2>
            </div>
            <!-- Section Title End -->

            <!-- Sponsor Start -->
            <div class="meeta-sponsor-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-1">

                            <div class="meeta-sponsor-logo sponsor-logo-1">
                                <a href="#"><img src="assets/images/sponsors-5.png" alt=""></a>
                            </div>
                            <div class="meeta-sponsor-logo sponsor-logo-2">
                                <a href="#"><img src="assets/images/sponsors-9.png" alt=""></a>
                            </div>

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-2">

                            <div class="meeta-sponsor-logo sponsor-logo-3">
                                <a href="#"><img src="assets/images/sponsors-7.png" alt=""></a>
                            </div>
                            <div class="meeta-sponsor-logo sponsor-logo-4">
                                <a href="#"><img src="assets/images/sponsors-11.png" alt=""></a>
                            </div>

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-3">

                            <div class="meeta-sponsor-logo sponsor-logo-5">
                                <a href="#"><img src="assets/images/sponsors-6.png" alt=""></a>
                            </div>
                            <div class="meeta-sponsor-logo sponsor-logo-6">
                                <a href="#"><img src="assets/images/sponsors-10.png" alt=""></a>
                            </div>

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-4">
                            <div class="meeta-sponsor-logo sponsor-logo-7">
                                <a href="#"><img src="assets/images/sponsors-8.png" alt=""></a>
                            </div>
                            <div class="meeta-sponsor-logo sponsor-logo-8">
                                <a href="#"><img src="assets/images/sponsors-12.png" alt=""></a>
                            </div>

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                </div>
            </div>
            <!-- Sponsor End -->

        </div>
    </div>
    <!-- Event Sponsors End -->

    <!-- Blog Start -->
    <div class="meeta-blog-3 section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="meeta-section-title section-title-4 text-center">
                <h2 class="main-title"><span class="title-shape-2">Tips</span> & Articles</h2>
            </div>
            <!-- Section Title End -->
            <div class="meeta-blog-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Blog Start -->
                        <div class="single-blog-3">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg"
                                        alt=""></a>
                                <div class="top-meta">
                                    <span class="category color-4">Conference</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date">Octobor 09, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Registration for opening workshop
                                    </a></h3>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Blog Start -->
                        <div class="single-blog-3">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg"
                                        alt=""></a>
                                <div class="top-meta">
                                    <span class="category color-1">Conference</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date">Octobor 09, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Registration for opening workshop
                                    </a></h3>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Blog Start -->
                        <div class="single-blog-3">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg"
                                        alt=""></a>
                                <div class="top-meta">
                                    <span class="category color-2">Conference</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date">Octobor 09, 2022</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Registration for opening workshop
                                    </a></h3>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Newsletter Section Start -->
    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <!-- Newsletter Text Start -->
                        <div class="newsletter-text">
                            <h3 class="title">Subscribe to our newsletter</h3>
                        </div>
                        <!-- Newsletter Text End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Your Email">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->

@endsection
