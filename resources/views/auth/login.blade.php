@extends('layouts.app')

@section('content')

<div class="section login-register-section section-padding">
    <div class="container">

        <!-- Login & Register Wrapper Start -->
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-6">

                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title">Login</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <form action="#">
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Username or email ">
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="single-form form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                </div>
                                <div class="form-btn">
                                    <button class="btn-2">Login</button>
                                </div>
                                <div class="single-form">
                                    <p><a href="#">Lost your password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login & Register Box End -->

                </div>
                <div class="col-lg-6">

                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title">Register</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <form action="#">
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Email ">
                                </div>
                                <div class="single-form">
                                    <input type="text" class="form-control" placeholder="Username or email ">
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Password ">
                                </div>
                                <div class="single-form">
                                    <input type="password" class="form-control" placeholder="Confirm Password ">
                                </div>
                                <div class="form-btn">
                                    <button class="btn-2">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login & Register Box End -->

                </div>
            </div>
        </div>
        <!-- Login & Register Wrapper End -->

    </div>
</div>
<!-- Login & Register End -->


<!-- Footer Start -->
<div class="meeta-footer-section" style="background-image: url(assets/images/bg/footer-bg.jpg);">

    <!-- Footer Widget Start -->
    <div class="footer-widget text-center">
        <div class="container">

            <!-- Footer Logo Start -->
            <div class="footer-logo">
                <a href="index.html"><img src="assets/images/footer-logo-1.png" alt="Logo"></a>
            </div>
            <!-- Footer Logo End -->

            <!-- Footer Newsletter Start -->
            <div class="footer-newsletter">
                <p>Join our mailing list to stay up to date on all things Expotin</p>

                <div class="footer-newsletter-form">
                    <form action="#">
                        <input type="text" placeholder="Your Email">
                        <button class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
            <!-- Footer Newsletter End -->

            <!-- Footer widget Social Start -->
            <div class="footer-widget-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            <!-- Footer widget Social End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <p>2022 Copyright Meeta Designed by Pixelcurve . All Rights Reserved</p>
            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
    <!-- Footer Widget End -->

</div>
<!-- Footer End -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
