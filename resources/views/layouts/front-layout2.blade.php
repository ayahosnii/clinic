<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dente &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{asset('assets2/front/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets2/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/front/css/bootstrap-datepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assets2/front/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets2/front/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets2/front/css/style.css')}}">

</head>
<body>

<div class="site-wrap">


@include('layouts.nav2')
@yield('content')

@include('layouts.footer2')
</div>

<script src="{{asset('assets2/front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets2/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets2/front/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets2/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets2/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets2/front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets2/front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets2/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets2/front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets2/front/js/aos.js')}}"></script>

<script src="{{asset('assets2/front/js/comparison.js')}}"></script>
<script src="{{asset('assets2/front/js/main.js')}}"></script>


@vite(['resources/js/app.js'])

@stack('script')

</body>
</html>
