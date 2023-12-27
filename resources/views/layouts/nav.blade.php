
<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->



<!-- Header Area -->
<header class="header" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->

                        @if(Auth::guard('web')->check())
                        <ul class="top-contact">
                            <li>
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    {{  Auth::guard('web')->user()->full_name }}
                                </a>
                                <div class="dropdown-menu m-0">
                                    <a href="#" class="dropdown-item">Logout</a>
                                </div>
                            </li>

                        </ul>

                        @else
                        <ul class="top-contact">
                                <li>
                                    <a class="nav-link" href="{{ route('dentist.login') }}">{{ __('Login') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('dentist.register') }}">{{ __('Register') }}</a>
                                </li>
                            </ul>
                        @endif
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('about')}}">About </a></li>
                                    <li><a href="{{route('service')}}">Services </a></li>
                                    <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('search')}}">Search</a></li>
                                            <li><a href="{{route('price')}}">Price</a></li>
                                            <li><a href="{{route('team')}}">Team</a></li>
                                            <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('blog')}}">Blogs <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="{{route('appointment')}}" class="btn">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->
