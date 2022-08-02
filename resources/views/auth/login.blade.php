@extends('layouts.app')

@section('content')

    <div class="section login-register-section section-padding">
        <div class="container">

            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrap">
                <div class="row gx-5">
                    <div class="col-lg-6 offset-lg-3">

                        <!-- Login & Register Box Start -->
                        <div class="login-register-box">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title">Login</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="login-register-form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="single-form">
                                        <input type="email" name="email" class="form-control" placeholder="Email ">
                                        @error('email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="single-form">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="single-form form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
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
                </div>
            </div>
            <!-- Login & Register Wrapper End -->

        </div>
    </div>
    <!-- Login & Register End -->

@endsection
