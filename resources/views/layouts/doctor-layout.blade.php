<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/front/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">

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


@include('layouts.nav')
<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
            <img src="{{asset('assets/img/den-bg.jpg')}}" alt="sidebar background" />
        </div>
        <div class="sidebar-layout">
            <div class="sidebar-header">
                <div class="pro-sidebar-logo">
                    <li _ngcontent-ng-c3108495514="" class="sidebar-user-panel">
                        <div _ngcontent-ng-c3108495514="" class="user-panel">
                            <div _ngcontent-ng-c3108495514="" class="image">
                                <img _ngcontent-ng-c3108495514=""  alt="User Image" class="img-circle user-img-circle" style="width: 50px; height: 50px" src="http://127.0.0.1:8000/assets/img/faces/6.png"></div></div><div _ngcontent-ng-c3108495514="" class="profile-usertitle"><div _ngcontent-ng-c3108495514="" class="sidebar-userpic-name">
                                {{\Illuminate\Support\Facades\Auth::guard('dentist')->user()->first_name}}
                            </div><div _ngcontent-ng-c3108495514="" class="profile-usertitle-job">Dentist </div></div></li>
                </div>
            </div>
            <div class="sidebar-content">
                <nav class="menu open-current-submenu">
                    <ul>
                        <li class="menu-header"><span> GENERAL </span></li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-vip-diamond-fill"></i>
                    </span>
                                <span class="menu-title">Components</span>
                                <span class="menu-suffix">
                      <span class="badge primary">Hot</span>
                    </span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Grid</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Layout</span>
                                        </a>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#">
                                            <span class="menu-title">Forms</span>
                                        </a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="#">
                                                        <span class="menu-title">Input</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">
                                                        <span class="menu-title">Select</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item sub-menu">
                                                    <a href="#">
                                                        <span class="menu-title">More</span>
                                                    </a>
                                                    <div class="sub-menu-list">
                                                        <ul>
                                                            <li class="menu-item">
                                                                <a href="#">
                                                                    <span class="menu-title">CheckBox</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">
                                                                    <span class="menu-title">Radio</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item sub-menu">
                                                                <a href="#">
                                                                    <span class="menu-title">Want more ?</span>
                                                                    <span class="menu-suffix">&#x1F914;</span>
                                                                </a>
                                                                <div class="sub-menu-list">
                                                                    <ul>
                                                                        <li class="menu-item">
                                                                            <a href="#">
                                                                                <span class="menu-prefix">&#127881;</span>
                                                                                <span class="menu-title">You made it </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-bar-chart-2-fill"></i>
                    </span>
                                <span class="menu-title">Charts</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Pie chart</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Line chart</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Bar chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-shopping-cart-fill"></i>
                    </span>
                                <span class="menu-title">E-commerce</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Products</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Orders</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">credit card</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                      <i class="ri-global-fill"></i>
                    </span>
                                <span class="menu-title">Maps</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Google maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Open street map</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item sub-menu">
                            <a href="#">
                    <span class="menu-icon">
                     <i class="ri-paint-brush-fill"></i>
                    </span>
                                <span class="menu-title">Theme</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            <span class="menu-title">Light</span>
                                        </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/front/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assets/front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/front/js/main.js')}}"></script>

@stack('script')
</body>

</html>
