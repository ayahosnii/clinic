@extends('layouts.front-layout')
@push('styles')
    <style>
        @font-face {
            font-family: Roboto;
            src: url(Roboto-Regular.ttf);
        }

        @font-face {
            font-family: Roboto-Bold;
            src: url(Roboto-Bold.ttf);
        }

        @font-face {
            font-family: YourNewIconFont;
            src: url('assets/svg/dermathology.svg') format('svg');
        }

        body,
        html {
            margin: 0;
            font-family: Roboto, sans-serif;
            background-color: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        button {
            border: none;
        }

        .column {
            max-width: 1000px;
            width: 100%;
            margin: auto;
        }

        .bm_container {
            width: 23%;
            margin: 1%;
            height: 200px;
            display: inline-block;
            position: relative;
            vertical-align: top;
            margin-bottom: 100px;
            border: 1px solid #cccccc;
            background-color: #F9F6EB;
        }

        .bm_container .title {
            font-family: Roboto-Bold, sans-serif;
            color: #666666;
            font-size: 27px;
            text-align: center;
        }

        .bm_inner_container {
            width: 80%;
            height: 200px;
            margin: auto;
        }

        .header {
            background-color: #ffffff;
            color: #ffffff;
            text-align: center;
            font-size: 40px;
            margin-bottom: 30px;
        }

        .header .title {
            padding-top: 50px;
            background-color: #F875AA;
            height: 193px;
        }

        .header .bar {
            background-color: #ffffff;
            height: 10px;
            background: url('data:image/svg+xml;utf8,<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 634.7 9.2" style="enable-background:new 0 0 634.7 9.2;" xml:space="preserve"><g><rect fill="#F875AA" width="158.8" height="9.2"/><rect x="158.8" fill="#FFDFDF" width="158.8" height="9.2"/><rect x="317.2" fill="#5BC2A8" width="158.8" height="9.2"/><rect x="476" fill="#603256" width="158.8" height="9.2"/></g></svg>');
        }

        .navigation {
            text-align: center;
        }

        .navigation .navButton {
            width: 80px;
            height: 50px;
            background-color: #F875AA;
            color: #DDDDDD;
            cursor: pointer;
        }

        #navText {
            display: inline-block;
            padding: 0 10px;
        }

        .navigation .navButton:hover {
            color: white;
        }

        @media only screen and (max-width: 680px) {
            .header {
                margin-bottom: 20px;
                font-size: 20px;
            }
            .bm_container {
                margin-bottom: 50px;
                height: 120px;
            }
            .bm_inner_container {
                height: 100px;
            }
            .bm_container .title {
                font-size: 14px;
            }
            .header .title {
                padding-top: 10px;
                height: 70px;
            }
            .header .bar {
                height: 2px;
            }
            .navigation {
                margin-bottom: 20px;
            }
            .navigation .navButton {
                height: 40px;
            }
        }

        .bm_icon_hoverable {
            cursor: pointer;
            transition: transform 0.5s cubic-bezier(.18, .78, .37, .84);
            transform-origin: 50% 50%;
            transform: scale(1, 1);
        }

        .bm_shadow_hoverable {
            cursor: pointer;
            transition: transform 0.5s cubic-bezier(.18, .78, .37, .84);
            transform-origin: 50% 50%;
            transform: translate(0, 0);
        }

        .bm_icon_hoverable:hover {
            transform: scale(1.05, 1.05);
        }

        .bm_icon_hoverable:hover .bm_shadow_hoverable {
            transform: translate(10px, 10px);
        }

        .bm_color_1{
            fill: #F875AA;
            stroke: #F875AA;
        }
        .bm_color_2{
            fill: #FFDFDF;
            stroke: #FFDFDF;
        }
        .bm_color_3{
            fill: #F9F6EB;
            stroke: #F9F6EB;
        }
        .bm_color_4{
            fill: #603256;
            stroke: #603256;
        }
    </style>
@endpush
@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Find your doctor</h5>
            </div>
            <div class="row g-5">
                <div id="app">
                    <find-doctor />
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
@push('script')
    <script src='{{asset('assets/js/animations.js')}}'></script>
    <script src='https://labs.nearpod.com/bodymovin/demo/medical_icons/bodymovin.js'></script><script  src="./script.js"></script>

    <script>
        var elementsArr = ['dermatology','apple','atoms','bandaid','bicycle','bottle','cross','eye','female_doctor','female_nurse','male_doctor','male_nurse','dropper','heart','mobile','pills','stethoscope','syringe','thermometer','tubes'];
        var currentPage = 0;
        var itemsPerPage = 4;
        var icons = [];
        var navText;

        function buildIcons(){
            var element, anim;
            for(var i=0;i<elementsArr.length;i+=1){
                element = document.getElementById('icon-container-'+elementsArr[i]);
                element.style.display = 'none';
                var params = {
                    container: document.getElementById('icon-'+elementsArr[i]),
                    autoplay:false,
                    loop:false,
                    animationData:animations[elementsArr[i]],
                    renderer:'svg'
                };
                anim = bodymovin.loadAnimation(params);
                icons.push({
                    anim:anim,
                    element: element
                })
            }
        }

        function buildNavigation(){
            navText = document.getElementById('navText');
            var nextButton = document.getElementById('nextButton');
            nextButton.addEventListener('click', function(){
                movePage(1);
            })
            var prevButton = document.getElementById('prevButton');
            prevButton.addEventListener('click', function(){
                movePage(-1);
            })
        }


        function renderPage(){
            var i, len = icons.length;
            for(i=0;i<len;i+=1){
                if(i<currentPage*itemsPerPage || i>=(currentPage+1)*itemsPerPage){
                    icons[i].element.style.display = 'none';
                    icons[i].anim.goToAndStop(0);
                } else {
                    icons[i].element.style.display = 'inline-block';
                    icons[i].anim.play();
                }
            }
            navText.innerHTML = (currentPage+1)+'/'+Math.ceil(icons.length/itemsPerPage);
        }

        function movePage(dir){
            if(currentPage === 0 && dir < 0){
                return;
            } else if((currentPage+1)*itemsPerPage > icons.length - 1 && dir > 0){
                return;
            }
            currentPage += dir;
            renderPage();

        }

        buildIcons();
        buildNavigation();
        renderPage();
    </script>
@endpush
