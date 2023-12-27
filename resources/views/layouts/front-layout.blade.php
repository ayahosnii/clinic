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


@include('layouts.nav')
@yield('content')

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
@vite(['resources/js/app.js'])

@stack('script')
</body>

</html>
