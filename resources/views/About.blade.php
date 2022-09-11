@extends('layouts.app')
 @section('content')
 <div class="meeta-about-section section-padding">
    <div class="container">

        <div class="row gy-5 align-items-center">
            <div class="col-lg-7">

                <!-- About Images Start -->
                <div class="meeta-about-images" style="background-image: url(assets/images/shape/shape-4.png);">
                    <div class="image">
                        <img src="{{asset ('images/about.jpg') }}" alt="About">
                    </div>
                </div>
                <!-- About Images End -->

            </div>
            <div class="col-lg-5">

                <!-- Section Title Start -->
                <div class="meeta-section-title-2 meeta-about-title">
                    <h4 class="sub-title">An event for</h4>
                    <h2 class="main-title">Designers, Web <br> developers & Design</h2>
                </div>
                <!-- Section Title End -->

                <!-- About Content Start -->
                <div class="meeta-about-content">

                    <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures</p>
                    <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures together, this time both in-person</p>

                </div>
                <!-- About Content End -->

            </div>
        </div>

    </div>
</div>
<!-- About Section End -->

<!-- Features Section Start -->
<div class="meeta-features-section section-padding">
    <div class="shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
    <img class="shape-2" src="assets/images/shape/shape-11.png" alt="">
    <div class="container">
        <div class="meeta-features-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Section Title Start -->
                    <div class="meeta-section-title-2">
                        <h4 class="sub-title">Reason to join conference</h4>
                        <h2 class="main-title">Why attend conference</h2>
                    </div>
                    <!-- Section Title End -->
                    <!-- Features Item Start -->
                    <div class="feature-item feature-1">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Trainings & Awards</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
                <div class="col-lg-4">
                    <!-- Features Item Start -->
                    <div class="feature-item feature-2">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">World Class Speaker</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                    <!-- Features Item Start -->
                    <div class="feature-item feature-3">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Evening Concert</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
                <div class="col-lg-4">
                    <!-- Features Item Start -->
                    <div class="feature-item feature-4">
                        <div class="feature-icon">
                            <img src="assets/images/feature-icon-4.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">3 Days Conference</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <!-- Features Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Section End -->

 @endsection

