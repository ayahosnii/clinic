<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/front/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/slicknav.min.css')}}">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--
    <link rel="stylesheet" href="{{--asset('assets/css/nice-select.css')--}}">
-->


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">

    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icofont.css')}}">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/med.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @stack('styles')

</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">

                    <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body ps-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


@include('layouts.nav-doctor')
<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
            <img src="{{asset('assets/img/den-bg.jpg')}}" alt="sidebar background" />
        </div>
        <div class="sidebar-layout">
            <div class="widget-profile pro-widget-content">
                <div class="profile-info-widget">
                    <a href="#" class="booking-doc-img">
                        <img src="{{Auth::guard('dentist')->user()->profile_picture}}" alt="User Image">
                    </a>
                    <div class="profile-det-info">
                        <h3>{{Auth::guard('dentist')->user()->full_name}}</h3>

                        <div class="patient-details">
                            <h5 class="mb-0">BDS, MDS - Oral &amp; Maxillofacial Surgery</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-content">
                <nav class="menu open-current-submenu">
                    <ul>
                        <li class="menu-header"><span> GENERAL </span></li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-time-line"></i>
                    </span>
                                <span class="menu-title">Appointments</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.appointments')}}">
                                            <span class="menu-title">Show Appointments</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.schedule-timings')}}">
                                            <span class="menu-title">Schedule timings</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.available-timings')}}">
                                            <span class="menu-title">Available Timings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-newspaper-line"></i>
                    </span>
                                <span class="menu-title">Invoices</span>
                                <span class="menu-suffix">
                      <span class="badge primary">Hot</span>
                    </span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.invoices')}}">
                                            <span class="menu-title">Invoices</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-account-circle-line"></i>
                    </span>
                                <span class="menu-title">Accounts</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.accounts')}}">
                                            <span class="menu-title">Dentist accounts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-star-line"></i>
                    </span>
                                <span class="menu-title">Reviews</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.reviews')}}">
                                            <span class="menu-title">Reviews</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                     <i class="ri-chat-1-line"></i>
                    </span>
                                <span class="menu-title">Message</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.chat-doctor')}}">
                                            <span class="menu-title">Message</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                     <i class="ri-account-pin-circle-line"></i>
                    </span>
                                <span class="menu-title">Profile</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.doctor-profile-settings')}}">
                                            <span class="menu-title">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="{{route('dentist.doctor-change-password')}}">
                    <span class="menu-icon">
                     <i class="ri-account-pin-circle-line"></i>
                    </span>
                                <span class="menu-title">Change password</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{route('dentist.doctor-profile-settings')}}">
                                            <span class="menu-title">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="{{route('dentist.social-media')}}">
                    <span class="menu-icon">
                        <i class="ri-facebook-box-fill"></i>
                    </span>
                                <span class="menu-title">Social media</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">

                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="menu-header" style="padding-top: 20px"><span> EXTRA </span></li>


                        <li class="menu-item">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-2-fill"></i>
                    </span>
                                <span class="menu-title">Documentation</span>
                                <span class="menu-suffix">
                      <span class="badge secondary">Beta</span>
                    </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-calendar-fill"></i>
                    </span>
                                <span class="menu-title">Calendar</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-service-fill"></i>
                    </span>
                                <span class="menu-title">Examples</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <div class="footer-box">
                    <div>

                    </div>
                    <div style="padding: 0 10px">
                <span style="display: none; margin-bottom: 10px"
                >Pro sidebar is also available as a react package
                </span>
                        <div style="margin-bottom: 15px">
                            <img
                                alt="preview badge"
                                src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social"
                            />
                        </div>
                        <div>
                            <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank"
                            >Check it out!</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <main class="">
@yield('content')

        </main>
        <div class="overlay"></div>
    </div>
</div>


@include('layouts.footer')
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- jquery Min JS -->
<script src="{{('assets/js/jquery.min.js')}}"></script>
<!-- jquery Migrate JS -->
<script src="{{('assets/js/jquery-migrate-3.0.0.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/front/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Jquery Nav JS -->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('assets/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<!-- Niceselect JS -->
<script src="{{--asset('assets/js/niceselect.js')--}}"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>

<!-- counterup JS -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Template Javascript -->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/js/med.js')}}"></script>
<!-- Template Javascript -->
<script src="{{asset('assets/front/js/main.js')}}"></script>

@stack('script')
</body>

</html>
