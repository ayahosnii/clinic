@extends('layouts.doctor-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />

    @vite(['resources/sass/doctordashboard.scss', 'assets/css/doctordashboard.css'])

@endpush

@section('content')

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title">Appointments</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <!-- Page Content -->
    <div class="content" style="transform: none; min-height: 159.24px;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <!-- Profile Widget -->

                    <!-- /Profile Widget -->

                    <!-- Last Booking -->

                    <!-- /Last Booking -->

                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 73.6667px;"><div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#" class="booking-doc-img">
                                            <img src="{{$patient->profile_picture}}" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>{{$patient->first_name}} {{$patient->last_name}}</h3>

                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT00{{$patient->id}}</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>{{$patient->phone_number}}</span></li>
                                        <li>Age <span>38 Years, Male</span></li>
                                        <li>Blood Group <span>AB+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Last Booking</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($patient->appointments as $appointment)
                                <li class="list-group-item">
                                    <div class="notify-block align-items-center d-flex">
                                        <div class="me-3 flex-shrink-0">
                                            <img alt="Image placeholder" src="{{$appointment->dentist->profile_picture}}" class="avatar  rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <h5 class="d-block mb-0">Dr. Darren Elder </h5>
                                            <span class="d-block text-sm text-muted">Dentist</span>
                                            <span class="d-block text-sm text-muted">14 Nov 2023 5.00 PM</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div><div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 295px; height: 1001px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>

                <div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="user-tabs">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#pat_appointments" data-bs-toggle="tab" aria-selected="true" role="tab">Appointments</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#pres" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><span>Prescription</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#medical" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><span class="med-records">Medical Records</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#billing" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><span>Billing</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <!-- Appointment Tab -->
                                <div id="pat_appointments" class="tab-pane fade show active" role="tabpanel">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Doctor</th>
                                                        <th>Appt Date</th>
                                                        <th>Booking Date</th>
                                                        <th>Amount</th>
                                                        <th>Follow Up</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($patient->appointments as $appointment)
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                        <img class="avatar-img rounded-circle" src="{{$appointment->dentist->profile_picture}}" alt="User Image">
                                                                    </a>
                                                                    <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. {{$appointment->dentist->first_name}} {{$appointment->dentist->last_name}} <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2023 <span class="d-block text-info">10.00 AM</span></td>
                                                            <td>12 Nov 2023</td>
                                                            <td>$160</td>
                                                            <td>16 Nov 2023</td>
                                                            @if($appointment->status == 'scheduled')
                                                                <td>
                                                                    <span class="badge rounded-pill bg-warning-light">{{$appointment->status}}</span>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="far fa-edit"></i> Edit
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="far fa-trash-alt"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>

                                                            @elseif($appointment->status == 'confirm')
                                                                <td>
                                                                    <span class="badge rounded-pill bg-success-light">{{$appointment->status}}</span>
                                                            </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="far fa-clock"></i> Reschedule
                                                                    </a>
                                                                </td>
                                                             @elseif($appointment->status == 'canceled')
                                                                <td>
                                                                    <span class="badge rounded-pill bg-danger-light">{{$appointment->status}}</span>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="far fa-edit"></i> Edit
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                @else
                                                                <td>
                                                                    <span class="badge rounded-pill bg-secondary-light">{{$appointment->status}}</span>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="far fa-edit"></i> Edit
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                    @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Appointment Tab -->

                                <!-- Prescription Tab -->
                                <div class="tab-pane fade" id="pres" role="tabpanel">
                                    <div>
                                        <a href="https://doccure.dreamstechnologies.com/html/template/add-prescription.html" class="add-new-btn">Add Prescription</a>
                                    </div>
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Date </th>
                                                        <th>Name</th>
                                                        <th>Created by </th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>14 Nov 2023</td>
                                                        <td>Prescription 1</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-01.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13 Nov 2023</td>
                                                        <td>Prescription 2</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-02.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12 Nov 2023</td>
                                                        <td>Prescription 3</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-03.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11 Nov 2023</td>
                                                        <td>Prescription 4</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-04.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10 Nov 2023</td>
                                                        <td>Prescription 5</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-05.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Marvin Campbell <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9 Nov 2023</td>
                                                        <td>Prescription 6</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-06.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8 Nov 2023</td>
                                                        <td>Prescription 7</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-07.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7 Nov 2023</td>
                                                        <td>Prescription 8</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-08.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6 Nov 2023</td>
                                                        <td>Prescription 9</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-09.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5 Nov 2023</td>
                                                        <td>Prescription 10</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-10.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Prescription Tab -->

                                <!-- Medical Records Tab -->
                                <div class="tab-pane fade" id="medical" role="tabpanel">
                                    <div>
                                        <a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#" class="add-new-btn" data-bs-toggle="modal" data-bs-target="#add_medical_records">Add Medical Records</a>
                                    </div>
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date </th>
                                                        <th>Description</th>
                                                        <th>Attachment</th>
                                                        <th>Created</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0010</a></td>
                                                        <td>14 Nov 2023</td>
                                                        <td>Dental Filling</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">dental-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-01.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0009</a></td>
                                                        <td>13 Nov 2023</td>
                                                        <td>Teeth Cleaning</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">dental-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-02.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/edit-prescription.html" class="btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#add_medical_records">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0008</a></td>
                                                        <td>12 Nov 2023</td>
                                                        <td>General Checkup</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">cardio-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-03.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0007</a></td>
                                                        <td>11 Nov 2023</td>
                                                        <td>General Test</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">general-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-04.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0006</a></td>
                                                        <td>10 Nov 2023</td>
                                                        <td>Eye Test</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">eye-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-05.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0005</a></td>
                                                        <td>9 Nov 2023</td>
                                                        <td>Leg Pain</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">ortho-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-06.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0004</a></td>
                                                        <td>8 Nov 2023</td>
                                                        <td>Head pain</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">neuro-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-07.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0003</a></td>
                                                        <td>7 Nov 2023</td>
                                                        <td>Skin Alergy</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">alergy-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-08.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0002</a></td>
                                                        <td>6 Nov 2023</td>
                                                        <td>Dental Removing</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">dental-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-09.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);">#MR-0001</a></td>
                                                        <td>5 Nov 2023</td>
                                                        <td>Dental Filling</td>
                                                        <td><a href="https://doccure.dreamstechnologies.com/html/template/patient-profile.html#">dental-test.pdf</a></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-10.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Medical Records Tab -->

                                <!-- Billing Tab -->
                                <div class="tab-pane" id="billing" role="tabpanel">
                                    <div>
                                        <a class="add-new-btn" href="https://doccure.dreamstechnologies.com/html/template/add-billing.html">Add Billing</a>
                                    </div>
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">

                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Doctor</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0010</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-01.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Ruby Perrin <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$450</td>
                                                        <td>14 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0009</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-02.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$300</td>
                                                        <td>13 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/edit-billing.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0008</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-03.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$150</td>
                                                        <td>12 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0007</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-04.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$50</td>
                                                        <td>11 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0006</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-05.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$600</td>
                                                        <td>10 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0005</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-06.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$200</td>
                                                        <td>9 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0004</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-07.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$100</td>
                                                        <td>8 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0003</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-08.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$250</td>
                                                        <td>7 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0002</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-09.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$175</td>
                                                        <td>6 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="https://doccure.dreamstechnologies.com/html/template/invoice-view.html">#INV-0001</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html" class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle" src="./Doccure_files/doctor-thumb-10.jpg" alt="User Image">
                                                                </a>
                                                                <a href="https://doccure.dreamstechnologies.com/html/template/doctor-profile.html">Dr. Olga Barlow <span>#0010</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$550</td>
                                                        <td>5 Nov 2023</td>
                                                        <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Billing Tab -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

    <!-- Other Sections -->
    <div>
        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
            <i class="ri-menu-line ri-xl"></i>
        </a>
        <h1 style="margin-bottom: 0"></h1>
        <span style="display: inline-block"></span>
        <br />
        <span></span>
    </div>

    <div></div>
    <div></div>

    <footer class="">
        <small style="margin-bottom: 20px; display: inline-block">
        </small>
        <br />
        <div class="social-links">

        </div>
    </footer>
@endsection

@push('script')
    <script src="https://unpkg.com/@popperjs/core@2"></script>


    <!-- jQuery -->
    <script src="{{asset('assets/js/temp/jquery-3.7.0.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/temp/bootstrap.bundle.min.js')}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{asset('assets/js/temp/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/temp/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{asset('assets/js/temp/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/temp/theia-sticky-sidebar.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/temp/script.js')}}"></script><div class="sidebar-overlay"></div>


    <script>
        const ANIMATION_DURATION = 300;

        const SIDEBAR_EL = document.getElementById("sidebar");

        const SUB_MENU_ELS = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu"
        );

        const FIRST_SUB_MENUS_BTN = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu > a"
        );

        const INNER_SUB_MENUS_BTN = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu .menu-item.sub-menu > a"
        );

        class PopperObject {
            instance = null;
            reference = null;
            popperTarget = null;

            constructor(reference, popperTarget) {
                this.init(reference, popperTarget);
            }

            init(reference, popperTarget) {
                this.reference = reference;
                this.popperTarget = popperTarget;
                this.instance = Popper.createPopper(this.reference, this.popperTarget, {
                    placement: "right",
                    strategy: "fixed",
                    resize: true,
                    modifiers: [
                        {
                            name: "computeStyles",
                            options: {
                                adaptive: false
                            }
                        },
                        {
                            name: "flip",
                            options: {
                                fallbackPlacements: ["left", "right"]
                            }
                        }
                    ]
                });

                document.addEventListener(
                    "click",
                    (e) => this.clicker(e, this.popperTarget, this.reference),
                    false
                );

                const ro = new ResizeObserver(() => {
                    this.instance.update();
                });

                ro.observe(this.popperTarget);
                ro.observe(this.reference);
            }

            clicker(event, popperTarget, reference) {
                if (
                    SIDEBAR_EL.classList.contains("collapsed") &&
                    !popperTarget.contains(event.target) &&
                    !reference.contains(event.target)
                ) {
                    this.hide();
                }
            }

            hide() {
                this.instance.state.elements.popper.style.visibility = "hidden";
            }
        }

        class Poppers {
            subMenuPoppers = [];

            constructor() {
                this.init();
            }

            init() {
                SUB_MENU_ELS.forEach((element) => {
                    this.subMenuPoppers.push(
                        new PopperObject(element, element.lastElementChild)
                    );
                    this.closePoppers();
                });
            }

            togglePopper(target) {
                if (window.getComputedStyle(target).visibility === "hidden")
                    target.style.visibility = "visible";
                else target.style.visibility = "hidden";
            }

            updatePoppers() {
                this.subMenuPoppers.forEach((element) => {
                    element.instance.state.elements.popper.style.display = "none";
                    element.instance.update();
                });
            }

            closePoppers() {
                this.subMenuPoppers.forEach((element) => {
                    element.hide();
                });
            }
        }

        const slideUp = (target, duration = ANIMATION_DURATION) => {
            const { parentElement } = target;
            parentElement.classList.remove("open");
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = `${duration}ms`;
            target.style.boxSizing = "border-box";
            target.style.height = `${target.offsetHeight}px`;
            target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            window.setTimeout(() => {
                target.style.display = "none";
                target.style.removeProperty("height");
                target.style.removeProperty("padding-top");
                target.style.removeProperty("padding-bottom");
                target.style.removeProperty("margin-top");
                target.style.removeProperty("margin-bottom");
                target.style.removeProperty("overflow");
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
            }, duration);
        };
        const slideDown = (target, duration = ANIMATION_DURATION) => {
            const { parentElement } = target;
            parentElement.classList.add("open");
            target.style.removeProperty("display");
            let { display } = window.getComputedStyle(target);
            if (display === "none") display = "block";
            target.style.display = display;
            const height = target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            target.offsetHeight;
            target.style.boxSizing = "border-box";
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = `${duration}ms`;
            target.style.height = `${height}px`;
            target.style.removeProperty("padding-top");
            target.style.removeProperty("padding-bottom");
            target.style.removeProperty("margin-top");
            target.style.removeProperty("margin-bottom");
            window.setTimeout(() => {
                target.style.removeProperty("height");
                target.style.removeProperty("overflow");
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
            }, duration);
        };

        const slideToggle = (target, duration = ANIMATION_DURATION) => {
            if (window.getComputedStyle(target).display === "none")
                return slideDown(target, duration);
            return slideUp(target, duration);
        };

        const PoppersInstance = new Poppers();

        /**
         * wait for the current animation to finish and update poppers position
         */
        const updatePoppersTimeout = () => {
            setTimeout(() => {
                PoppersInstance.updatePoppers();
            }, ANIMATION_DURATION);
        };

        /**
         * sidebar collapse handler
         */
        document.getElementById("btn-collapse").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("collapsed");
            PoppersInstance.closePoppers();
            if (SIDEBAR_EL.classList.contains("collapsed"))
                FIRST_SUB_MENUS_BTN.forEach((element) => {
                    element.parentElement.classList.remove("open");
                });

            updatePoppersTimeout();
        });

        /**
         * sidebar toggle handler (on break point )
         */
        document.getElementById("btn-toggle").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("toggled");

            updatePoppersTimeout();
        });

        /**
         * toggle sidebar on overlay click
         */
        document.getElementById("overlay").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("toggled");
        });

        const defaultOpenMenus = document.querySelectorAll(".menu-item.sub-menu.open");

        defaultOpenMenus.forEach((element) => {
            element.lastElementChild.style.display = "block";
        });

        /**
         * handle top level submenu click
         */
        FIRST_SUB_MENUS_BTN.forEach((element) => {
            element.addEventListener("click", () => {
                if (SIDEBAR_EL.classList.contains("collapsed"))
                    PoppersInstance.togglePopper(element.nextElementSibling);
                else {
                    const parentMenu = element.closest(".menu.open-current-submenu");
                    if (parentMenu)
                        parentMenu
                            .querySelectorAll(":scope > ul > .menu-item.sub-menu > a")
                            .forEach(
                                (el) =>
                                    window.getComputedStyle(el.nextElementSibling).display !==
                                    "none" && slideUp(el.nextElementSibling)
                            );
                    slideToggle(element.nextElementSibling);
                }
            });
        });

        /**
         * handle inner submenu click
         */
        INNER_SUB_MENUS_BTN.forEach((element) => {
            element.addEventListener("click", () => {
                slideToggle(element.nextElementSibling);
            });
        });

    </script>
@endpush
