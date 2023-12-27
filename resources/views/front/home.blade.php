@extends('layouts.front-layout')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="#" class="btn">Get Appointment</a>
                                    <a href="#" class="btn primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="#" class="btn">Get Appointment</a>
                                    <a href="#" class="btn primary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="#" class="btn">Get Appointment</a>
                                    <a href="#" class="btn primary">Conatct Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/front/img/about1.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-4">Best Medical Care For Yourself and Your Family</h1>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                @foreach($dentists as $dentist)
                    <div class="team-item">
                        <div class="row g-0 bg-light rounded overflow-hidden">
                            <div class="col-12 col-sm-5 h-100 doc-pro-img">
                                <div class="doctor-amount">
                                    <span>$ 360</span>
                                </div>
                                <img class="img-fluid h-100" src="{{$dentist->profile_picture}}" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                <div class="mt-auto p-4">
                                    <h3>{{$dentist->full_name}}</h3>
                                    <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                    <div class="reviews-ratings">
                                        <p>
                                            <span><i class="fas fa-star"></i> 4.0</span> (20)
                                        </p>
                                    </div>
                                    <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                                </div>
                                <div class="d-flex mt-auto border-top p-4">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Start service -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{asset('assets/front/img/section-img.png')}}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-prescription"></i>
                        <h4><a href="service-details.html">General Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-tooth"></i>
                        <h4><a href="service-details.html">Teeth Whitening</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-heart-alt"></i>
                        <h4><a href="service-details.html">Heart Surgery</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-listening"></i>
                        <h4><a href="service-details.html">Ear Treatment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-eye-alt"></i>
                        <h4><a href="service-details.html">Vision Problems</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="icofont icofont-blood"></i>
                        <h4><a href="service-details.html">Blood Transfusion</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End service -->



    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control bg-light border-0 datetimepicker-input"
                                               placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control bg-light border-0 datetimepicker-input"
                                               placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
                <h1 class="display-4">Awesome Medical Programs</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('assets/front/img/price-1.jpg')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Pregnancy Care</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('assets/front/img/price-2.jpg')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Health Checkup</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('assets/front/img/price-3.jpg')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Dental Care</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('assets/front/img/price-4.jpg')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Operation & Surgery</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>199<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p>Emergency Medical Treatment</p>
                        <p>Highly Experienced Doctors</p>
                        <p>Highest Success Rate</p>
                        <p>Telephone Service</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>
                <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
                <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                <h1 class="display-4">Patients Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/front/img/testimonial-1.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/front/img/testimonial-2.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/front/img/testimonial-3.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/front/img/blog-1.jpg')}}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{asset('assets/front/img/user.jpg')}}" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/front/img/blog-2.jpg')}}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{asset('assets/front/img/user.jpg')}}" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/front/img/blog-3.jpg')}}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{asset('assets/front/img/user.jpg')}}" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


@endsection
