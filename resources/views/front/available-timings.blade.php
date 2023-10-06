@extends('layouts.front-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Available Timings</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Available Timings</li></ol></nav></div></div></div></div>

    <div class="content"><div class="container"><div class="row"><div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar"><div class="stickysidebar"><div class="profile-sidebar"><div class="widget-profile pro-widget-content"><div class="profile-info-widget"><a href="#" class="booking-doc-img"><img src="/vuejs/template/img/doctor-thumb-02.297f3674.jpg" alt="User Image"></a><div class="profile-det-info"><h3>Dr. Darren Elder</h3><div class="patient-details"><h5 class="mb-0">BDS, MDS - Oral &amp; Maxillofacial Surgery</h5></div></div></div></div><div class="dashboard-widget"><nav class="dashboard-menu"><ul><li class=""><a href="/vuejs/template/doctor-dashboard" class=""><i class="fas fa-columns"></i><span class="ms-1">Dashboard</span></a></li><li class=""><a href="/vuejs/template/appointments" class=""><i class="fas fa-calendar-check"></i><span class="ms-1">Appointments</span></a></li><li class=""><a href="/vuejs/template/my-patients" class=""><i class="fas fa-user-injured"></i><span class="ms-1">My Patients</span></a></li><li class=""><a href="/vuejs/template/schedule-timings" class=""><i class="fas fa-hourglass-start"></i><span class="ms-1">Schedule Timings</span></a></li><li class="active"><a aria-current="page" href="/vuejs/template/available-timings" class="active router-link-exact-active"><i class="fas fa-clock"></i><span class="ms-1">Available Timings</span></a></li><li class=""><a href="/vuejs/template/invoices" class=""><i class="fas fa-file-invoice"></i><span class="ms-1">Invoices</span></a></li><li class=""><a href="/vuejs/template/accounts" class=""><i class="fas fa-file-invoice-dollar"></i><span class="ms-1">Accounts</span></a></li><li class=""><a href="/vuejs/template/reviews" class=""><i class="fas fa-star"></i><span class="ms-1">Reviews</span></a></li><li class=""><a href="/vuejs/template/chat-doctor" class=""><i class="fas fa-comments"></i><span class="ms-1">Message</span><small class="unread-msg">23</small></a></li><li class=""><a href="/vuejs/template/doctor-profile-settings" class=""><i class="fas fa-user-cog"></i><span class="ms-1">Profile Settings</span></a></li><li class=""><a href="/vuejs/template/social-media" class=""><i class="fas fa-share-alt"></i><span class="ms-1">Social Media</span></a></li><li class=""><a href="/vuejs/template/doctor-change-password" class=""><i class="fas fa-lock"></i><span class="ms-1">Change Password</span></a></li><li class=""><a href="/vuejs/template/" class=""><i class="fas fa-sign-out-alt"></i><span class="ms-1">Logout</span></a></li></ul></nav></div></div></div></div><div class="col-md-7 col-lg-8 col-xl-9"><div class="row"><div class="col-sm-12"><div class="card"><div class="card-body"><h4 class="card-title">Schedule Timings</h4><div class="profile-box"><div class="row"><div class="col-sm-6 col-12 avail-time"><div class="mb-3"><div class="schedule-calendar-col justify-content-start"><form class="d-flex flex-wrap"><span class="input-group-text">Date:</span><div class="me-3"><div class="v3dp__datepicker"><div class="v3dp__input_wrapper"><input type="date" readonly="" class="form-control" editable="true" placeholder="" tabindex="0"><div class="v3dp__clearable" style="display: none;"><i>x</i></div></div><div data-v-65eb861b="" class="v3dp__popout v3dp__popout-year" style="--popout-column-definition: repeat(3, 1fr); display: none;"><div data-v-65eb861b="" class="v3dp__heading"><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__left"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M-9 16V-8h24v24z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M5 0L1 4l4 4"></path></g></svg></button><span data-v-65eb861b="" class="v3dp__heading__center">2020 - 2029</span><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__right"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M15-8v24H-9V-8z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M1 8l4-4-4-4"></path></g></svg></button></div><div data-v-65eb861b="" class="v3dp__body"><!----><div data-v-65eb861b="" class="v3dp__elements"><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2020</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2021</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2022</span></button><button data-v-65eb861b="" class="selected v3dp__element__button__year"><span data-v-65eb861b="">2023</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2024</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2025</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2026</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2027</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2028</span></button><button data-v-65eb861b="" class="v3dp__element__button__year"><span data-v-65eb861b="">2029</span></button></div></div></div><div data-v-65eb861b="" class="v3dp__popout v3dp__popout-month" style="--popout-column-definition: repeat(3, 1fr); display: none;"><div data-v-65eb861b="" class="v3dp__heading"><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__left"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M-9 16V-8h24v24z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M5 0L1 4l4 4"></path></g></svg></button><button data-v-65eb861b="" class="v3dp__heading__center">2023</button><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__right"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M15-8v24H-9V-8z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M1 8l4-4-4-4"></path></g></svg></button></div><div data-v-65eb861b="" class="v3dp__body"><!----><div data-v-65eb861b="" class="v3dp__elements"><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Jan</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Feb</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Mar</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Apr</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">May</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Jun</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Jul</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Aug</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Sep</span></button><button data-v-65eb861b="" class="selected v3dp__element__button__month"><span data-v-65eb861b="">Oct</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Nov</span></button><button data-v-65eb861b="" class="v3dp__element__button__month"><span data-v-65eb861b="">Dec</span></button></div></div></div><div data-v-65eb861b="" class="v3dp__popout v3dp__popout-day" style="--popout-column-definition: repeat(7, 1fr); display: none;"><div data-v-65eb861b="" class="v3dp__heading"><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__left"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M-9 16V-8h24v24z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M5 0L1 4l4 4"></path></g></svg></button><button data-v-65eb861b="" class="v3dp__heading__center">October 2023</button><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__right"><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M15-8v24H-9V-8z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M1 8l4-4-4-4"></path></g></svg></button></div><div data-v-65eb861b="" class="v3dp__body"><div data-v-65eb861b="" class="v3dp__subheading"><span class="v3dp__subheading__weekday__0">Mon</span><span class="v3dp__subheading__weekday__1">Tue</span><span class="v3dp__subheading__weekday__2">Wed</span><span class="v3dp__subheading__weekday__3">Thu</span><span class="v3dp__subheading__weekday__4">Fri</span><span class="v3dp__subheading__weekday__5">Sat</span><span class="v3dp__subheading__weekday__6">Sun</span></div><hr data-v-65eb861b="" class="v3dp__divider"><div data-v-65eb861b="" class="v3dp__elements"><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">25</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">26</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">27</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">28</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">29</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">30</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">01</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">02</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">03</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">04</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">05</span></button><button data-v-65eb861b="" class="selected current v3dp__element__button__day"><span data-v-65eb861b="">06</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">07</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">08</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">09</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">10</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">11</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">12</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">13</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">14</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">15</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">16</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">17</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">18</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">19</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">20</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">21</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">22</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">23</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">24</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">25</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">26</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">27</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">28</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">29</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">30</span></button><button data-v-65eb861b="" class="v3dp__element__button__day"><span data-v-65eb861b="">31</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">01</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">02</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">03</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">04</span></button><button data-v-65eb861b="" disabled="" class="v3dp__element__button__day"><span data-v-65eb861b="">05</span></button></div></div></div><div data-v-65eb861b="" data-v-81ac698d="" class="v3dp__popout v3dp__popout-time" style="--popout-column-definition: repeat(2, 1fr); display: none;"><div data-v-65eb861b="" class="v3dp__heading"><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__left" disabled=""><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M-9 16V-8h24v24z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M5 0L1 4l4 4"></path></g></svg></button><button data-v-65eb861b="" class="v3dp__heading__center">13:42</button><button data-v-65eb861b="" class="v3dp__heading__button v3dp__heading__button__right" disabled=""><svg data-v-65eb861b="" class="v3dp__heading__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 8"><g data-v-65eb861b="" fill="none" fill-rule="evenodd"><path data-v-65eb861b="" stroke="none" d="M15-8v24H-9V-8z"></path><path data-v-65eb861b="" stroke-linecap="round" stroke-linejoin="round" d="M1 8l4-4-4-4"></path></g></svg></button></div><div data-v-65eb861b="" class="v3dp__body"><!----><div data-v-65eb861b="" class="v3dp__elements"><div data-v-81ac698d="" class="v3dp__column"><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">00</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">01</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">02</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">03</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">04</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">05</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">06</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">07</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">08</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">09</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">10</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">11</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">12</span></button><button data-v-81ac698d="" class="selected v3dp__element_button__hour"><span data-v-81ac698d="">13</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">14</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">15</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">16</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">17</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">18</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">19</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">20</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">21</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">22</span></button><button data-v-81ac698d="" class="v3dp__element_button__hour"><span data-v-81ac698d="">23</span></button></div><div data-v-81ac698d="" class="v3dp__column"><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">00</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">01</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">02</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">03</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">04</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">05</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">06</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">07</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">08</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">09</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">10</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">11</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">12</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">13</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">14</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">15</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">16</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">17</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">18</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">19</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">20</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">21</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">22</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">23</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">24</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">25</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">26</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">27</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">28</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">29</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">30</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">31</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">32</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">33</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">34</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">35</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">36</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">37</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">38</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">39</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">40</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">41</span></button><button data-v-81ac698d="" class="selected v3dp__element_button__minute"><span data-v-81ac698d="">42</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">43</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">44</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">45</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">46</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">47</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">48</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">49</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">50</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">51</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">52</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">53</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">54</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">55</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">56</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">57</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">58</span></button><button data-v-81ac698d="" class="v3dp__element_button__minute"><span data-v-81ac698d="">59</span></button></div></div></div></div></div></div><div class="search-time-mobile"><input type="submit" name="submit" class="btn btn-primary h-100" value="Search"></div></form></div></div></div></div><div class="row"><div class="col-lg-12"><h3 class="h3 text-center book-btn2 mt-3 px-5 py-1 mx-3 rounded"> 1<sup>st</sup> Session </h3><div class="text-center mt-3"><h4 class="h4 mb-2">Start Time</h4><span class="h4 btn btn-outline-primary"><b> 09:00 AM</b></span></div><div class="token-slot mt-2"><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="18"><span class="visit-rsn" data-bs-toggle="tooltip" title="02:40 PM">02:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="19"><span class="visit-rsn" data-bs-toggle="tooltip" title="03:00 PM">03:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="20"><span class="visit-rsn" data-bs-toggle="tooltip" title="03:20 PM">03:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="21"><span class="visit-rsn" data-bs-toggle="tooltip" title="03:40 PM">03:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="22"><span class="visit-rsn" data-bs-toggle="tooltip" title="04:00 PM">04:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="23"><span class="visit-rsn" data-bs-toggle="tooltip" title="05:20 PM">05:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="24"><span class="visit-rsn" data-bs-toggle="tooltip" title="04:40 PM">04:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="25"><span class="visit-rsn" data-bs-toggle="tooltip" title="06:00 PM">06:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="26"><span class="visit-rsn" data-bs-toggle="tooltip" title="06:20 PM">06:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="27"><span class="visit-rsn" data-bs-toggle="tooltip" title="06:40 PM">06:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="28"><span class="visit-rsn" data-bs-toggle="tooltip" title="07:00 PM">07:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="29"><span class="visit-rsn" data-bs-toggle="tooltip" title="07:20 PM">07:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="30"><span class="visit-rsn" data-bs-toggle="tooltip" title="07:40 PM">07:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="31"><span class="visit-rsn" data-bs-toggle="tooltip" title="08:00 PM">08:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="32"><span class="visit-rsn" data-bs-toggle="tooltip" title="08:20 PM">08:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="33"><span class="visit-rsn" data-bs-toggle="tooltip" title="08:40 PM">08:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="34"><span class="visit-rsn" data-bs-toggle="tooltip" title="09:00 PM">09:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="35"><span class="visit-rsn" data-bs-toggle="tooltip" title="09:20 PM">09:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="36"><span class="visit-rsn" data-bs-toggle="tooltip" title="09:40 PM">09:40 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="37"><span class="visit-rsn" data-bs-toggle="tooltip" title="10:00 PM">10:00 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="38"><span class="visit-rsn" data-bs-toggle="tooltip" title="10:20 PM">10:20 PM</span></label></div><div class="form-check-inline visits me-1"><label class="visit-btns"><input type="checkbox" class="form-check-input" data-date="2023-05-21" data-timezone="Asia/Calcutta" data-end-time="15:40:00" name="token[]" data-session="1" value="39"><span class="visit-rsn" data-bs-toggle="tooltip" title="10:40 PM">10:40 PM</span></label></div></div></div></div></div><div class="text-center"><button class="btn btn-secondary btn-md btn btn-primary" type="button"><!----><div class="btn-content">Save</div></button></div></div></div></div></div></div></div></div></div>
@endsection