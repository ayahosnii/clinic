@extends('layouts.front-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Change Password</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Change Password</li></ol></nav></div></div></div></div>

    <div class="content"><div class="container"><div class="row"><div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar"><div class="stickysidebar"><div class="profile-sidebar"><div class="widget-profile pro-widget-content"><div class="profile-info-widget"><a href="#" class="booking-doc-img"><img src="/vuejs/template/img/doctor-thumb-02.297f3674.jpg" alt="User Image"></a><div class="profile-det-info"><h3>Dr. Darren Elder</h3><div class="patient-details"><h5 class="mb-0">BDS, MDS - Oral &amp; Maxillofacial Surgery</h5></div></div></div></div><div class="dashboard-widget"><nav class="dashboard-menu"><ul><li class=""><a href="/vuejs/template/doctor-dashboard" class=""><i class="fas fa-columns"></i><span class="ms-1">Dashboard</span></a></li><li class=""><a href="/vuejs/template/appointments" class=""><i class="fas fa-calendar-check"></i><span class="ms-1">Appointments</span></a></li><li class=""><a href="/vuejs/template/my-patients" class=""><i class="fas fa-user-injured"></i><span class="ms-1">My Patients</span></a></li><li class=""><a href="/vuejs/template/schedule-timings" class=""><i class="fas fa-hourglass-start"></i><span class="ms-1">Schedule Timings</span></a></li><li class=""><a href="/vuejs/template/available-timings" class=""><i class="fas fa-clock"></i><span class="ms-1">Available Timings</span></a></li><li class=""><a href="/vuejs/template/invoices" class=""><i class="fas fa-file-invoice"></i><span class="ms-1">Invoices</span></a></li><li class=""><a href="/vuejs/template/accounts" class=""><i class="fas fa-file-invoice-dollar"></i><span class="ms-1">Accounts</span></a></li><li class=""><a href="/vuejs/template/reviews" class=""><i class="fas fa-star"></i><span class="ms-1">Reviews</span></a></li><li class=""><a href="/vuejs/template/chat-doctor" class=""><i class="fas fa-comments"></i><span class="ms-1">Message</span><small class="unread-msg">23</small></a></li><li class=""><a href="/vuejs/template/doctor-profile-settings" class=""><i class="fas fa-user-cog"></i><span class="ms-1">Profile Settings</span></a></li><li class=""><a href="/vuejs/template/social-media" class=""><i class="fas fa-share-alt"></i><span class="ms-1">Social Media</span></a></li><li class="active"><a aria-current="page" href="/vuejs/template/doctor-change-password" class="active router-link-exact-active"><i class="fas fa-lock"></i><span class="ms-1">Change Password</span></a></li><li class=""><a href="/vuejs/template/" class=""><i class="fas fa-sign-out-alt"></i><span class="ms-1">Logout</span></a></li></ul></nav></div></div></div></div><div class="col-md-7 col-lg-8 col-xl-9"><div class="card"><div class="card-body"><div class="row"><div class="col-md-12 col-lg-6"><form><div class="mb-3"><label class="mb-2">Old Password</label><input type="password" class="form-control"></div><div class="mb-3"><label class="mb-2">New Password</label><input type="password" class="form-control"></div><div class="mb-3"><label class="mb-2">Confirm Password</label><input type="password" class="form-control"></div><div class="submit-section"><button class="btn btn-secondary btn-md btn btn-primary submit-btn" type="submit"><!----><div class="btn-content"> Save Changes </div></button></div></form></div></div></div></div></div></div></div></div>
@endsection