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




                        <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Reviews</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Reviews</li></ol></nav></div></div></div></div>

                        <div class="doc-review review-listing"><ul class="comments-list"><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient.18ac9b65.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Richard Wilson</span><span class="comment-date">Reviewed 2 Days ago</span><div class="review-count rating"><i class="fas fa-star filled"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star me-1"></i></div></div><p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor </p><p class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus </p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div><ul class="comments-reply"><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/doctor-thumb-02.297f3674.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Dr. Darren Elder</span><span class="comment-date">Reviewed 3 Days ago</span></div><p class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Curabitur non nulla sit amet nisl tempus </p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a></div></div></div></li></ul></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient2.256b0df4.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Travis Trimble</span><span class="comment-date">Reviewed 4 Days ago</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient3.961398fe.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Carl Kelly</span><span class="comment-date">Reviewed 5 Days ago</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient4.996dc4ba.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Michelle Fairfax</span><span class="comment-date">Reviewed 6 Days ago</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient5.5dd71813.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Gina Moore</span><span class="comment-date">Reviewed 1 Week ago</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient9.ef96a760.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Walter Roberson</span><span class="comment-date">Reviewed 1 Week ago</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li><li><div class="comment"><img class="avatar rounded-circle" alt="User Image" src="/vuejs/template/img/patient8.9e8e61f5.jpg"><div class="comment-body"><div class="meta-data"><span class="comment-author">Daniel Griffing</span><span class="comment-date">Reviewed on 1 Jun 2023</span><div class="review-count rating"><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i><i class="fas fa-star filled me-1"></i></div></div><p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus</p><div class="comment-reply"><a class="comment-btn" href="javascript:;"><i class="fas fa-reply"></i> Reply </a><p class="recommend-btn"><span>Recommend?</span><a href="javascript:;" class="like-btn"><i class="far fa-thumbs-up"></i> Yes </a><a href="javascript:;" class="dislike-btn"><i class="far fa-thumbs-down"></i> No </a></p></div></div></div></li></ul></div>


    <div>
        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
            <i class="ri-menu-line ri-xl"></i>
        </a>
        <h1 style="margin-bottom: 0"></h1>
        <span style="display: inline-block">
            </span>
        <br />
        <span>

            </span>

    </div>
    <div>

    </div>
    <div>

    </div>
    <footer class="">
        <small style="margin-bottom: 20px; display: inline-block">
        </small>
        <br />
        <div class="social-links">

        </div>
    </footer>
@endsection

