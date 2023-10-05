@extends('admin.layouts.master')
@section('title')
    Archived Bills
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Bills</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Archive
                    Bills</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="col-lg-12 col-xl-12 col-md-12" style="direction: ltr">
        <div class="card mg-b-20" id="list8">
            <div class="text-wrap">
                <div class="example">
                    <ul class="list-group wd-md-100p users-list-group">
                        @foreach($dentists as $dentist)
                            <li class="list-group-item d-flex align-items-center">
                                <img alt="" class="mr-3 rounded-circle avatar-md" src="{{URL::asset('assets/img/faces/5.jpg')}}">
                                <div>
                                    <h6 style="text-align: left" class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">{{$dentist->first_name}}</h6>
                                    <span style="text-align: left;" class="d-block tx-13 text-muted">
                                    14 Nov 2023, 10.00 AM</span>
                                </div>
                                <div class="d-flex float-left ml-auto">
                                    <div class="appointment-action">
                                        <a href="javascript:void(0)" class="btn btn-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#appt_details" style="    background-color: rgba(255,204,0,0.18)!important; color: #e3c500!important;">
                                            <i class="far fa-eye"></i> View </a>
                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light" style="background-color: rgba(15,183,107,.12)!important;color: #26af48!important;"><i class="fas fa-check"></i> Accept </a>
                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light" style="background-color: rgba(242,17,54,.12)!important;color: #e63c3c!important;"><i class="fas fa-times"></i> Cancel </a></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
