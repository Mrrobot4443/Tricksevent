<div class="main-wrapper">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <div class="meeta-header-section meeta-header-2 meeta-header-3 meeta-header-5">

        <!-- Header Middle Start -->
        <div class="header-middle header-sticky">
            <div class="container">

                <div class="header-wrap">
                    <!-- Header Logo Start -->
                    <div class="header-logo header-logo-3">
                        <a class="logo-black" href="/"><img src="{{ asset('assets/images/logo-3.png') }}"
                                alt="Logo"></a>
                        <a class="logo-white" href="/"><img src="{{ asset('assets/images/logo-4.png') }}"
                                alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Navigation Start -->
                    <div class="header-navigation d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="active-menu"><a href="{{ route('home') }}">Home</a>

                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">

                                    <li><a href="event-list.html">Event List</a></li>
                                    <li><a href="event-single.html">Event Single</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="price.html">Pricing</a></li>

                                    <li><a href="/login">Login </a></li>
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="{{ route('logout') }}">logout</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-standard.html">Latest News</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="me-5"><a href="{{ route('contact') }}">Contact</a></li>

                        </ul>
                        <!-- Header Navigation End -->

                    </div>
                    <div class="col-lg-3 col-8">

                        <!-- Header Meta Start -->
                        <div class="header-meta ms-5">

                            <div class="header-actions">
                                <div class="header-action">
                                     <button class="icon-open-container ">
                                            <span class="action-text">My Cart</span>
                                            <i class="flaticon-shopping-cart"></i>
                                            <span class="count">3</span>
                                       </a>
                                </div>
                                <div class="header-action d-none d-sm-block">
                                    <div class="header-search">
                                        <a class="search-btn" href="#"><i class="flaticon-loupe"></i></a>
                                        <div class="search-wrap">
                                            <div class="search-inner">
                                                <i id="search-close" class="flaticon-close search-close"></i>
                                                <div class="search-cell">
                                                    <form action="#">
                                                        <div class="search-field-holder">
                                                            <input class="main-search-input" type="search"
                                                                placeholder="Search Your Keyword...">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-meta">

                                <div class="header-btn d-none d-md-block">
                                    <a href="price.html" class="btn-2">Buy Ticket</a>
                                </div>
                                <!-- Mini Cart Box Start -->
                                <div class="meeta-mini-cart-box">

                                    <div class="mini-cart-items">

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-1.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
                                                <p class="mini-cart-quantity">1 × $19.99</p>
                                            </div>
                                            <button class="btn-close"></button>
                                        </div>

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-2.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
                                                <p class="mini-cart-quantity">1 × $19.99</p>
                                            </div>
                                            <button class="btn-close"></button>
                                        </div>

                                        <div class="mini-cart-item">
                                            <div class="mini-cart-item-image">
                                                <a href="#"><img src="assets/images/cart/cart-3.jpg"
                                                        alt="Cart"></a>
                                            </div>
                                            <div class="mini-cart-item-content">
                                                <h4 class="mini-cart-title"><a href="#">Virtual Event with
                                                        Protected Content and Hidden Livestream </a></h4>
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
                            <!-- Header Toggle Start -->
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <!-- Header Toggle End -->

                        </div>
                        <!-- Header Meta End -->

                    </div>

                </div>
            </div>
            <!-- Header Middle End -->

        </div>
        <!-- Header End -->
