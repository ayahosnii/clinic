@extends('layouts.front-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />
@endpush

@section('content')

    <div class="content"><div class="container"><div class="row">



                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">


                    <div id="nav-bar">
                        <input id="nav-toggle" type="checkbox">
                        <div id="nav-header"><a id="nav-title" href="https://codepen.io" target="_blank">C<i class="fab fa-codepen"></i>DEPEN</a>
                            <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                            <hr>
                        </div>
                        <div id="nav-content">
                            <div class="nav-button"><i class="fas fa-palette"></i><span>My Work</span></div>
                            <div class="nav-button"><i class="fas fa-images"></i><span>Assets</span></div>
                            <div class="nav-button"><i class="fas fa-thumbtack"></i><span>Pinned Items</span></div>
                            <hr>
                            <div class="nav-button"><i class="fas fa-heart"></i><span>Following</span></div>
                            <div class="nav-button"><i class="fas fa-chart-line"></i><span>Trending</span></div>
                            <div class="nav-button"><i class="fas fa-fire"></i><span>Challenges</span></div>
                            <div class="nav-button"><i class="fas fa-magic"></i><span>Spark</span></div>
                            <hr>
                            <div class="nav-button"><i class="fas fa-gem"></i><span>Codepen Pro</span></div>
                            <div id="nav-content-highlight"></div>
                        </div>
                        <input id="nav-footer-toggle" type="checkbox">
                        <div id="nav-footer">
                            <div id="nav-footer-heading">
                                <div id="nav-footer-avatar"><img src="https://gravatar.com/avatar/4474ca42d303761c2901fa819c4f2547"></div>
                                <div id="nav-footer-titlebox"><a id="nav-footer-title" href="https://codepen.io/uahnbu/pens/public" target="_blank">uahnbu</a><span id="nav-footer-subtitle">Admin</span></div>
                                <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
                            </div>
                            <div id="nav-footer-content">
                                <lorem>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</lorem>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Invoices</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Invoices</li></ol></nav></div></div></div></div>

                    <div class="card card-table"><div class="card-body"><div class="table-responsive"><table class="table table-hover table-center mb-0"><thead><tr><th>Invoice No</th><th>Patient</th><th>Amount</th><th>Paid On</th><th>Actions</th></tr></thead><tbody><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0010</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Richard Wilson <span>#PT0016</span></a></h2></td><td>$450</td><td>14 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0009</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Charlene Reed <span>#PT0001</span></a></h2></td><td>$200</td><td>13 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0008</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Travis Trimble <span>#PT0002</span></a></h2></td><td>$100</td><td>12 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0007</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Carl Kelly <span>#PT0003</span></a></h2></td><td>$350</td><td>11 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0006</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax <span>#PT0004</span></a></h2></td><td>$275</td><td>10 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0005</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Gina Moore <span>#PT0005</span></a></h2></td><td>$600</td><td>9 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0004</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient6.470ffb7c.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Elsie Gilley <span>#PT0006</span></a></h2></td><td>$50</td><td>8 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0003</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient7.f14899cc.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Joan Gardner <span>#PT0007</span></a></h2></td><td>$400</td><td>7 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0002</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient8.9e8e61f5.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Daniel Griffing <span>#PT0008</span></a></h2></td><td>$550</td><td>6 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0001</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient9.ef96a760.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Walter Roberson <span>#PT0009</span></a></h2></td><td>$100</td><td>5 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr></tbody></table></div></div></div></div></div></div></div>
@endsection
