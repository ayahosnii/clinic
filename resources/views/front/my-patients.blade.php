@extends('layouts.front-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">My Patients</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">My Patients</li></ol></nav></div></div></div></div>

    <div class="content"><div class="container"><div class="row"><div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar"><div class="stickysidebar"><div class="profile-sidebar"><div class="widget-profile pro-widget-content"><div class="profile-info-widget"><a href="#" class="booking-doc-img"><img src="/vuejs/template/img/doctor-thumb-02.297f3674.jpg" alt="User Image"></a><div class="profile-det-info"><h3>Dr. Darren Elder</h3><div class="patient-details"><h5 class="mb-0">BDS, MDS - Oral &amp; Maxillofacial Surgery</h5></div></div></div></div><div class="dashboard-widget"><nav class="dashboard-menu"><ul><li class=""><a href="/vuejs/template/doctor-dashboard" class=""><i class="fas fa-columns"></i><span class="ms-1">Dashboard</span></a></li><li class=""><a href="/vuejs/template/appointments" class=""><i class="fas fa-calendar-check"></i><span class="ms-1">Appointments</span></a></li><li class="active"><a aria-current="page" href="/vuejs/template/my-patients" class="active router-link-exact-active"><i class="fas fa-user-injured"></i><span class="ms-1">My Patients</span></a></li><li class=""><a href="/vuejs/template/schedule-timings" class=""><i class="fas fa-hourglass-start"></i><span class="ms-1">Schedule Timings</span></a></li><li class=""><a href="/vuejs/template/available-timings" class=""><i class="fas fa-clock"></i><span class="ms-1">Available Timings</span></a></li><li class=""><a href="/vuejs/template/invoices" class=""><i class="fas fa-file-invoice"></i><span class="ms-1">Invoices</span></a></li><li class=""><a href="/vuejs/template/accounts" class=""><i class="fas fa-file-invoice-dollar"></i><span class="ms-1">Accounts</span></a></li><li class=""><a href="/vuejs/template/reviews" class=""><i class="fas fa-star"></i><span class="ms-1">Reviews</span></a></li><li class=""><a href="/vuejs/template/chat-doctor" class=""><i class="fas fa-comments"></i><span class="ms-1">Message</span><small class="unread-msg">23</small></a></li><li class=""><a href="/vuejs/template/doctor-profile-settings" class=""><i class="fas fa-user-cog"></i><span class="ms-1">Profile Settings</span></a></li><li class=""><a href="/vuejs/template/social-media" class=""><i class="fas fa-share-alt"></i><span class="ms-1">Social Media</span></a></li><li class=""><a href="/vuejs/template/doctor-change-password" class=""><i class="fas fa-lock"></i><span class="ms-1">Change Password</span></a></li><li class=""><a href="/vuejs/template/" class=""><i class="fas fa-sign-out-alt"></i><span class="ms-1">Logout</span></a></li></ul></nav></div></div></div></div><div class="col-md-7 col-lg-8 col-xl-9"><div class="row row-grid"><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Richard Wilson</a></h3><div class="patient-details"><h5><b>Patient ID : </b>P0016</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 952 001 8563</span></li><li> Age<span>38 Years, Male</span></li><li> Blood Group<span>AB+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Charlene Reed</a></h3><div class="patient-details"><h5><b>Patient ID : </b>P0001</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>North Carolina, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 828 632 9170</span></li><li> Age<span>29 Years, Female</span></li><li> Blood Group<span>O+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Travis Trimble</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0002</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Maine, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 207 729 9974</span></li><li> Age<span>23 Years, Male</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Carl Kelly</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0003</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Indiana, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 260 724 7769</span></li><li> Age<span>32 Years, Male</span></li><li> Blood Group<span>A+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0004</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Indiana, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 504 368 6874</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Gina Moore</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0005</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 954 820 7887</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>AB-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient6.470ffb7c.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Elsie Gilley</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0006</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Kentucky, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 315 384 4562</span></li><li> Age<span>14 Years, Female</span></li><li> Blood Group<span>O-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient7.f14899cc.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Joan Gardner</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0007</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>California, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 707 2202 603</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>A-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient8.9e8e61f5.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Daniel Griffing</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0008</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>New Jersey, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 973 773 9497</span></li><li> Age<span>28 Years, Male</span></li><li> Blood Group<span>O+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient9.ef96a760.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Walter Roberson</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0009</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 850 358 4445</span></li><li> Age<span>28 Years, Male</span></li><li> Blood Group<span>A+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient10.244042cb.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Robert Rhodes</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0010</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>California, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 858 259 5285</span></li><li> Age<span>19 Years, Male</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient11.4997aeb7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Harry Williams</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0011</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Colorado, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 303 607 7075</span></li><li> Age<span>9 Years, Male</span></li><li> Blood Group<span>A-</span></li></ul></div></div></div></div></div></div></div></div></div>
@endsection