@extends('frontend.layouts.page_app')

@section('content')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <style>
        .home-slider {
            max-width: 100% !important;
        }
        .home-banner-area .aiz-category-menu .sub-cat-menu {
            width: calc(100% - 290px);
            left: calc(280px);
        }
        /* #auction_products .slick-slider .slick-list .slick-slide, */
        #section_home_categories .slick-slider .slick-list .slick-slide {
            margin-bottom: -4px;
        }
        .home-category-banner .home-category-name{
            bottom: -50px;
        }
        @media (min-width: 992px){
            .todays_deal{
                width: 230px;
            }
            .todays_deal .c-scrollbar-light{
               scrollbar-width: auto !important;
               padding-right: 5px !important;
            }
        }
        @media (max-width: 991px){
            .home-banner-area .container{
                min-width: 0;
                padding-left: 15px !important;
                padding-right: 15px!important;
            }
        }
        @media (max-width: 767px){
            #flash_deal .flash-deals-baner{
                height: 203px !important;
            }
        }

        hr.section-divider {
        border: none;
        border-top: 2px solid #7A7A7A;
        margin: 2rem 0;
        position: relative;
        }
        hr.section-divider::after {
        content: "";
        position: absolute;
        top: -2px;
        left: 0;
        width: 80px;
        height: 2px;
        background: linear-gradient(to right, #7A7A7A, #7A7A7A);
        }

        /* start: Avatar */
        .avatar-group {
            display: flex;
            align-items: center;
            /* justify-content: center; */
        }
        .avatar {
            position: relative;
            transition: .2s;
        }
        .avatar:not(:first-child) {
            margin-left: -1.5rem;
        }
        .avatar:hover {
            z-index: 1;
            transform: translateY(-.5rem);
        }
        .avatar-name {
            position: absolute;
            bottom: calc(100% + .5rem);
            left: 50%;
            transform: translateX(-50%);
            padding: .5rem .75rem;
            border-radius: .25rem;
            background-color: rgba(0, 0, 0, .7);
            color: #fff;
            font-size: .875rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: .2s;
        }
        .avatar-name::before {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: .5rem solid;
            border-color: rgba(0, 0, 0, .7) transparent transparent;
        }
        .avatar:hover .avatar-name {
            opacity: 1;
            visibility: visible;
        }
        .avatar img {
            width: 4rem;
            height: 4rem;
            display: block;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 .25rem 1rem rgba(0, 0, 0, .1);
        }
        /* end: Avatar */

        .inter-font {
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        }


        .container-why {
            display: flex;
            align-items: center; /* vertically center the text */
            gap: 10px; /* space between image and text */
        }

        .image {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .text {
            
        }





    </style>


    @php $lang = get_system_language()->code;  @endphp

    <!-- home banner area -->
    <div class="home-banner-area mb-3" style="">

        <div id="section_best_selling" style="background-color: #DEE9FF; padding-top: 15px; padding-bottom: 15px;">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 mt-2 mt-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="inter-font" style="font-size: 48px; margin-bottom:20px">Your Health Partner, <br> Every Step of the Way.</span>
                            </h3>
                            <!-- Links -->
                            <!-- <div class="d-flex">
                                <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                            </div> -->

                            
                        </div>
                        <!-- Product Section -->
                        <div class="px-sm-3">
                            <div class="avatar-group">
                                <div class="avatar">
                                    <span class="avatar-name">Someone 1</span>
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                                </div>
                                <div class="avatar">
                                    <span class="avatar-name">Someone 2</span>
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                                </div>
                                <div class="avatar">
                                    <span class="avatar-name">Someone 3</span>
                                    <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                                </div>
                                <div class="avatar">
                                    <span class="avatar-name">Someone 4</span>
                                    <img src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHBlcnNvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                                </div>
                                <div class="avatar">
                                    <span class="avatar-name">Someone 5</span>
                                    <img src="https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHBlcnNvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Image">
                                </div>
                                <div style="margin-left: 0.1rem;">
                                    <h5 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                        <span class="" style="color:#D64779">100K + </span>
                                    </h5>
                                    <span style="color:#202020">Satisfied Customers</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
        </div>

        <div id="section_best_selling" style="background-color: #EDEDED;">
                <section class="bg-light border-top mt-auto">
    <div class="container px-xs-0">
        <div class="row no-gutters border-left border-soft-light">
            <!-- Terms & conditions -->
            <div class="col-lg-3 col-6 policy-file">
                <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1" href="{{ route('terms') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.004" height="32" viewBox="0 0 26.004 32">
                        <path id="Union_8" data-name="Union 8" d="M-14508,18932v-.01a6.01,6.01,0,0,1-5.975-5.492h-.021v-14h1v13.5h0a4.961,4.961,0,0,0,4.908,4.994h.091v0h14v1Zm17-4v-1a2,2,0,0,0,2-2h1a3,3,0,0,1-2.927,3Zm-16,0a3,3,0,0,1-3-3h1a2,2,0,0,0,2,2h16v1Zm18-3v-16.994h-4v-1h3.6l-5.6-5.6v3.6h-.01a2.01,2.01,0,0,0,2,2v1a3.009,3.009,0,0,1-3-3h.01v-4h.6l0,0H-14507a2,2,0,0,0-2,2v22h-1v-22a3,3,0,0,1,3-3v0h12l0,0,7,7-.01.01V18925Zm-16-4.992v-1h12v1Zm0-4.006v-1h12v1Zm0-4v-1h12v1Z" transform="translate(14513.998 -18900.002)" fill="#919199"/>
                    </svg>
                    <h4 class="text-dark fs-14 fw-700 mt-3">{{ translate('Shipping') }}</h4>
                </a>
            </div>

            <!-- Return Policy -->
            <div class="col-lg-3 col-6 policy-file">
                <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1" href="{{ route('returnpolicy') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.001" height="23.971" viewBox="0 0 32.001 23.971">
                        <path id="Union_7" data-name="Union 7" d="M-14490,18922.967a6.972,6.972,0,0,0,4.949-2.051,6.944,6.944,0,0,0,2.052-4.943,7.008,7.008,0,0,0-7-7v0h-22.1l7.295,7.295-.707.707-7.779-7.779-.708-.707.708-.7,7.774-7.779.712.707-7.261,7.258H-14490v0a8.01,8.01,0,0,1,8,8,8.008,8.008,0,0,1-8,8Z" transform="translate(14514.001 -18900)" fill="#919199"/>
                    </svg>
                    <h4 class="text-dark fs-14 fw-700 mt-3">{{ translate('Quick Payment') }}</h4>
                </a>
            </div>

            <!-- Support Policy -->
            <div class="col-lg-3 col-6 policy-file">
                <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1" href="{{ route('supportpolicy') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.002" height="32.002" viewBox="0 0 32.002 32.002">
                        <g id="Group_24198" data-name="Group 24198" transform="translate(-1113.999 -2398)">
                        <path id="Subtraction_14" data-name="Subtraction 14" d="M-14508,18916h0l-1,0a12.911,12.911,0,0,1,3.806-9.187A12.916,12.916,0,0,1-14496,18903a12.912,12.912,0,0,1,9.193,3.811A12.9,12.9,0,0,1-14483,18916l-1,0a11.918,11.918,0,0,0-3.516-8.484A11.919,11.919,0,0,0-14496,18904a11.921,11.921,0,0,0-8.486,3.516A11.913,11.913,0,0,0-14508,18916Z" transform="translate(15626 -16505)" fill="#919199"/>
                        <path id="Subtraction_15" data-name="Subtraction 15" d="M-14510,18912h-1a3,3,0,0,1-3-3v-6a3,3,0,0,1,3-3h1a2,2,0,0,1,2,2v8A2,2,0,0,1-14510,18912Zm-1-11a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h1a1,1,0,0,0,1-1v-8a1,1,0,0,0-1-1Z" transform="translate(15628 -16489)" fill="#919199"/>
                        <path id="Subtraction_19" data-name="Subtraction 19" d="M4,12H3A3,3,0,0,1,0,9V3A3,3,0,0,1,3,0H4A2,2,0,0,1,6,2v8A2,2,0,0,1,4,12ZM3,1A2,2,0,0,0,1,3V9a2,2,0,0,0,2,2H4a1,1,0,0,0,1-1V2A1,1,0,0,0,4,1Z" transform="translate(1146.002 2423) rotate(180)" fill="#919199"/>
                        <path id="Subtraction_17" data-name="Subtraction 17" d="M-14512,18908a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2,2,2,0,0,1,2,2v4A2,2,0,0,1-14512,18908Zm0-7a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1,1,1,0,0,0,1-1v-4A1,1,0,0,0-14512,18901Z" transform="translate(20034 16940.002) rotate(90)" fill="#919199"/>
                        <rect id="Rectangle_18418" data-name="Rectangle 18418" width="1" height="4.001" transform="translate(1137.502 2427.502) rotate(90)" fill="#919199"/>
                        <path id="Intersection_1" data-name="Intersection 1" d="M-14508.5,18910a4.508,4.508,0,0,0,4.5-4.5h1a5.508,5.508,0,0,1-5.5,5.5Z" transform="translate(15646.004 -16482.5)" fill="#919199"/>
                        </g>
                    </svg>
                    <h4 class="text-dark fs-14 fw-700 mt-3">{{ translate('Support Policy') }}</h4>
                </a>
            </div>

            <!-- Privacy Policy -->
            <div class="col-lg-3 col-6 policy-file">
                <a class="text-reset h-100 border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1" href="{{ route('privacypolicy') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <g id="Group_24236" data-name="Group 24236" transform="translate(-1454.002 -2430.002)">
                        <path id="Subtraction_11" data-name="Subtraction 11" d="M-14498,18932a15.894,15.894,0,0,1-11.312-4.687A15.909,15.909,0,0,1-14514,18916a15.884,15.884,0,0,1,4.685-11.309A15.9,15.9,0,0,1-14498,18900a15.909,15.909,0,0,1,11.316,4.688A15.885,15.885,0,0,1-14482,18916a15.9,15.9,0,0,1-4.687,11.316A15.909,15.909,0,0,1-14498,18932Zm0-31a14.9,14.9,0,0,0-10.605,4.393A14.9,14.9,0,0,0-14513,18916a14.9,14.9,0,0,0,4.395,10.607A14.9,14.9,0,0,0-14498,18931a14.9,14.9,0,0,0,10.607-4.393A14.9,14.9,0,0,0-14483,18916a14.9,14.9,0,0,0-4.393-10.607A14.9,14.9,0,0,0-14498,18901Z" transform="translate(15968 -16470)" fill="#919199"/>
                        <g id="Group_24196" data-name="Group 24196" transform="translate(0 -1)">
                            <rect id="Rectangle_18406" data-name="Rectangle 18406" width="2" height="10" transform="translate(1469 2440)" fill="#919199"/>
                            <rect id="Rectangle_18407" data-name="Rectangle 18407" width="2" height="2" transform="translate(1469 2452)" fill="#919199"/>
                        </g>
                        </g>
                    </svg>
                    <h4 class="text-dark fs-14 fw-700 mt-3">{{ translate('24/7 Support') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section>

        <div id="section_best_selling" style="background-color: #EDEDED; padding-top: 15px; padding-bottom: 15px;">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 mt-2 mt-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="">Best Selling</span>
                            </h3>
                            <!-- Links -->
                            <!-- <div class="d-flex">
                                <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                            </div> -->
                        </div>

                        
                        <!-- Product Section -->
                        <div class="px-sm-3">
                            
                        </div>
                    </div>
                </section>
        </div>

         <div id="section_best_selling" style="background-color: #EDEDED; padding-top: 15px; padding-bottom: 15px;">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                <span class="inter-font" style="font-size: 48px; margin-bottom:20px;color:#0D0D0D">Our Commitment to <br> Quality.</span>
                            </h3>
                            <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>


                        <!-- Product Section -->
                        <div class="px-sm-3">
                            <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">🩺</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Trusted Medical Experts</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Connect instantly with certified doctors and specialists for professional medical advice and consultations.<br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                   <p style="font-size: 48px;">💊</p>
                                
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">One-Stop Healthcare Platform</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Shop for genuine medicines, health supplies, and wellness products — all in one app.<br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">📅</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Easy Appointment Scheduling</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Book doctor appointments anytime, anywhere with instant confirmation and reminders. <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">🔔</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Real-Time Notifications</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Get updates about upcoming appointments, prescriptions, health events, and new product launches.  <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">💬</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Secure & Private Consultations</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Your health information and chats are encrypted and never shared with third parties. <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">🚚</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Fast & Reliable Delivery</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Get medicines and healthcare essentials delivered safely to your doorstep. <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">💰</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Affordable Healthcare Access</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Enjoy competitive pricing on medical products and consultation fees. <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                             <div class="container-why">
                                <div style="height:60px;
                                border-radius:8px; width:60px;
                                display: flex;
                                justify-content: center; 
                                align-items: center; 
                                ">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> -->
                                    <p style="font-size: 48px;">❤️</p>
                                </div>
                                <!-- <img src="example.jpg" alt="Example" class="image"> -->
                                <div class="text">
                                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                            <span class="inter-font" style="font-size: 22px; margin-bottom:20px;color:#0D0D0D">Personalized Health Experience</span>
                                        </h3>
                                        <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Receive tailored health recommendations, event alerts, and follow-up reminders based on your history. <br>doctors and specialists for professional medical advice and consultations.</span>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </section>
        </div>

        
        <div id="section_best_selling" style="background-color: #1053D4; padding-top: 15px; padding-bottom: 15px;">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin: 20px 0;">
                                <span class="inter-font" style="font-size: 48px; margin-bottom:20px;color:#ffffff">Your Health Partner, <br> Every Step of the Way.</span>
                            </h3>
                            <span style="color:#BCBCBC; margin: 20px 0; margin-bottom:40px;">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>


                        <!-- Product Section -->
                        <div class="px-sm-3">
                            
                        </div>
                    </div>
                </section>
        </div>


       

        <div id="section_best_selling" style="background-color: #EDEDED; ">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 mt-2 mt-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="">Best Selling</span>
                            </h3>
                            <!-- Links -->
                            <!-- <div class="d-flex">
                                <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                            </div> -->
                        </div>

                        
                        <!-- Product Section -->
                        <div class="px-sm-3">
                            
                        </div>
                    </div>
                </section>
        </div>

        <div id="section_best_selling" style="background-color: #EDEDED; ">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 mt-2 mt-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <!-- <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="">Testimonials That <br> Inspire Us</span>
                            </h3>
                            <span>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span> -->
                            <!-- Links -->
                            <!-- <div class="d-flex">
                                <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                            </div> -->
                        </div>
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="" style="color:#0D0D0D">Testimonials That <br> Inspire Us</span>
                            </h3>
                        <span style="color:#7A7A7A">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        <!-- Product Section -->
                        <!-- <div class="px-sm-3">
                            
                        </div> -->
                    </div>

                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div id="testimonial-slider" class="owl-carousel">
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="images/img-1.jpg" alt="">
                                        </div>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dolor eget ante pretium commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean purus sem, aliquam eget lorem at, efficitur mattis risus. Morbi efficitur molestie cursus. Etiam eget sodales lorem. Proin volutpat lectus at pulvinar consectetur. Aliquam erat volutpat. Sed.
                                        </p>
                                        <h3 class="testimonial-title">
                                            Williamson
                                            <small class="post">Web Developer</small>
                                        </h3>
                                    </div>
                    
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="images/img-2.jpg" alt="">
                                        </div>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dolor eget ante pretium commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean purus sem, aliquam eget lorem at, efficitur mattis risus. Morbi efficitur molestie cursus. Etiam eget sodales lorem. Proin volutpat lectus at pulvinar consectetur. Aliquam erat volutpat. Sed.
                                        </p>
                                        <h3 class="testimonial-title">
                                            kristiana
                                            <small class="post">Web Designer</small>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     -->

                </section>
        </div>


        


        </div>

    </div>

        <div id="section_best_selling" style="background-color: #EDEDED; ">
                <section >
                    <div class="container px-3">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 mt-2 mt-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <!-- <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="">Testimonials That <br> Inspire Us</span>
                            </h3>
                            <span>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span> -->
                            <!-- Links -->
                            <!-- <div class="d-flex">
                                <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                                <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                            </div> -->
                        </div>
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="" style="color:#0D0D0D">Have Questions ? <br> Contact Us</span>
                            </h3>
                        <span style="color:#7A7A7A">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, <br> 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        <!-- Product Section -->
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-md-6"  style="back-ground-color:#7A7A7A; padding:30px; border-radius:8px;">
                                <div id="testimonial-slider" class="owl-carousel">
                                    
                    
                                    
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>

                    

                    

                </section>
        </div>


    <!-- Banner section 1 -->
    @php $homeBanner1Images = get_setting('home_banner1_images', null, $lang);   @endphp
    @if ($homeBanner1Images != null)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                @php
                    $banner_1_imags = json_decode($homeBanner1Images);
                    $data_md = count($banner_1_imags) >= 2 ? 2 : 1;
                    $home_banner1_links = get_setting('home_banner1_links', null, $lang);
                @endphp
                <div class="w-100">
                    <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                        data-items="{{ count($banner_1_imags) }}" data-xxl-items="{{ count($banner_1_imags) }}"
                        data-xl-items="{{ count($banner_1_imags) }}" data-lg-items="{{ $data_md }}"
                        data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                        data-dots="false">
                        @foreach ($banner_1_imags as $key => $value)
                            <div class="carousel-box overflow-hidden hov-scale-img">
                                <a href="{{ isset(json_decode($home_banner1_links, true)[$key]) ? json_decode($home_banner1_links, true)[$key] : '' }}"
                                    class="d-block text-reset rounded-2 overflow-hidden">
                                    <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                        data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                        class="img-fluid lazyload w-100 has-transition"
                                        onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Flash Deal -->
    @php
        $flash_deal = get_featured_flash_deal();
        $flash_deal_bg = get_setting('flash_deal_bg_color');
    @endphp
    @if ($flash_deal != null)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3" id="flash_deal">
            <div class="container">
                <div class="rounded-2 overflow-hidden p-3 p-md-2rem @if(get_setting('flash_deal_section_outline') == 1) border @endif" style="background: {{ $flash_deal_bg != null ? $flash_deal_bg : '#fff9ed' }}; border-color: {{ get_setting('flash_deal_section_outline_color') }} !important;">
                    <!-- Top Section -->
                    <div class="d-flex flex-wrap align-items-baseline justify-content-center justify-content-sm-between mb-2 mb-md-3 position-relative">
                        <div class="d-flex flex-wrap align-items-center">
                            <!-- Title -->
                            <h3 class="fs-22 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="d-inline-block">{{ translate('Flash Sale') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24"
                                    class="ml-2">
                                    <path id="Path_28795" data-name="Path 28795"
                                        d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z"
                                        transform="translate(-15 -5)" fill="#fcc201" />
                                </svg>
                            </h3>
                            <!-- Countdown -->
                            <div class="aiz-count-down align-items-center ml-2 mb-2 mb-lg-0" data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                        </div>

                        <!-- Links -->
                        <div>
                            <div class="text-dark d-flex align-items-center mb-0">
                                <a href="{{ route('flash-deals') }}"
                                    class="fs-10 fs-md-12 fw-700 has-transition text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary mr-3">{{ translate('View All Flash Sale') }}</a>
                                <span class=" border-left border-soft-light border-width-2 pl-3">
                                    <a href="{{ route('flash-deal-details', $flash_deal->slug) }}"
                                        class="fs-10 fs-md-12 fw-700 has-transition text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary">{{ translate('View All Products from This Flash Sale') }}</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-16 align-items-center">
                        <!-- Flash Deals Baner -->
                        <div class="col-auto">
                            <a href="{{ route('flash-deal-details', $flash_deal->slug) }}">
                                <div class=" size-180px size-md-200px size-lg-280px rounded-2 overflow-hidden"
                                    style="background-image: url('{{ uploaded_asset($flash_deal->banner) }}'); background-size: cover; background-position: center center;">
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <!-- Flash Deals Products -->
                            @php
                                $flash_deal_products = get_flash_deal_products($flash_deal->id);
                            @endphp
                            <div class="pr-md-3">
                                <div class="aiz-carousel gutters-16 arrow-inactive-none arrow-x-0"
                                data-items="5" data-xxl-items="5" data-xl-items="4" data-lg-items="3" data-md-items="2.5"
                                data-sm-items="2.3" data-xs-items="1" data-arrows="true" data-dots="false">
                                @foreach ($flash_deal_products as $key => $flash_deal_product)
                                    <div class="carousel-box position-relative has-transition hov-animate-outline">
                                        @if ($flash_deal_product->product != null && $flash_deal_product->product->published != 0)
                                            @php
                                                $product_url = route('product', $flash_deal_product->product->slug);
                                                if ($flash_deal_product->product->auction_product == 1) {
                                                    $product_url = route('auction-product', $flash_deal_product->product->slug);
                                                }
                                            @endphp
                                            <div
                                                class="aiz-card-box h-180px h-md-200px h-lg-280px flash-deal-item position-relative text-center">
                                                <a href="{{ $product_url }}"
                                                    class="d-block overflow-hidden hov-scale-img"
                                                    title="{{ $flash_deal_product->product->getTranslation('name') }}">
                                                    <!-- Image -->
                                                    <img src="{{ get_image($flash_deal_product->product->thumbnail) }}"
                                                        class="lazyload h-100px h-md-120px h-lg-170px mw-100 mx-auto has-transition rounded-2"
                                                        alt="{{ $flash_deal_product->product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-40px text-center pt-1 px-1 mt-1">
                                                        <a href="{{ $product_url }}" class="d-block text-reset hov-text-primary"
                                                            title="{{ $flash_deal_product->product->getTranslation('name') }}">{{ $flash_deal_product->product->getTranslation('name') }}</a>
                                                    </h3>
                                                    <!-- Price -->
                                                    <h4 class="fs-14 d-flex justify-content-center mt-3">
                                                        @if ($flash_deal_product->auction_product == 0)
                                                            <!-- Previous price -->
                                                            @if (home_base_price($flash_deal_product->product) != home_discounted_base_price($flash_deal_product->product))
                                                                <span class="disc-amount has-transition">
                                                                    <del class="fw-400 text-secondary mr-1">{{ home_base_price($flash_deal_product->product) }}</del>
                                                                </span>
                                                            @endif
                                                            <!-- price -->
                                                            <span class="fw-700 text-primary">{{ home_discounted_base_price($flash_deal_product->product) }}</span>
                                                        @endif
                                                    </h4>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Featured Products -->
    <!-- <div id="section_featured">

    </div> -->


    @if (addon_is_activated('preorder'))
        <!-- Banner Section 2 -->
        @php $homepreorder_banner_1Images = get_setting('home_preorder_banner_1_images', null, $lang);   @endphp
        @if ($homepreorder_banner_1Images != null)
            <div class="mb-2 mb-md-3 mt-2 mt-md-3">
                <div class="container">
                    @php
                        $banner_2_imags = json_decode($homepreorder_banner_1Images);
                        $data_md = count($banner_2_imags) >= 2 ? 2 : 1;
                        $home_preorder_banner_1_links = get_setting('home_preorder_banner_1_links', null, $lang);
                    @endphp
                    <div class="rounded-2 overflow-hidden">
                        <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                        data-items="{{ count($banner_2_imags) }}" data-xxl-items="{{ count($banner_2_imags) }}"
                        data-xl-items="{{ count($banner_2_imags) }}" data-lg-items="{{ $data_md }}"
                        data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                        data-dots="false">
                        @foreach ($banner_2_imags as $key => $value)
                            <div class="carousel-box overflow-hidden hov-scale-img">
                                <a href="{{ isset(json_decode($home_preorder_banner_1_links, true)[$key]) ? json_decode($home_preorder_banner_1_links, true)[$key] : '' }}"
                                    class="d-block text-reset rounded-2 overflow-hidden">
                                    <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                        data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                        class="img-fluid lazyload w-100 has-transition"
                                        onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        @endif
    


        <!-- Featured Preorder Products -->
        <div id="section_featured_preorder_products">

        </div>
    @endif

    <!-- Banner Section 2 -->
    @php $homeBanner2Images = get_setting('home_banner2_images', null, $lang);   @endphp
    @if ($homeBanner2Images != null)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                @php
                    $banner_2_imags = json_decode($homeBanner2Images);
                    $data_md = count($banner_2_imags) >= 2 ? 2 : 1;
                    $home_banner2_links = get_setting('home_banner2_links', null, $lang);
                @endphp
                <div class="rounded-2 overflow-hidden">
                    <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                    data-items="{{ count($banner_2_imags) }}" data-xxl-items="{{ count($banner_2_imags) }}"
                    data-xl-items="{{ count($banner_2_imags) }}" data-lg-items="{{ $data_md }}"
                    data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                    data-dots="false">
                    @foreach ($banner_2_imags as $key => $value)
                        <div class="carousel-box overflow-hidden hov-scale-img">
                            <a href="{{ isset(json_decode($home_banner2_links, true)[$key]) ? json_decode($home_banner2_links, true)[$key] : '' }}"
                                class="d-block text-reset rounded-2 overflow-hidden">
                                <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                    class="img-fluid lazyload w-100 has-transition"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    @endif





    <!-- Banner Section 3 -->
    @php $homeBanner3Images = get_setting('home_banner3_images', null, $lang);   @endphp
    @if ($homeBanner3Images != null)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                @php
                    $banner_3_imags = json_decode($homeBanner3Images);
                    $data_md = count($banner_3_imags) >= 2 ? 2 : 1;
                    $home_banner3_links = get_setting('home_banner3_links', null, $lang);
                @endphp
                <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                    data-items="{{ count($banner_3_imags) }}" data-xxl-items="{{ count($banner_3_imags) }}"
                    data-xl-items="{{ count($banner_3_imags) }}" data-lg-items="{{ $data_md }}"
                    data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                    data-dots="false">
                    @foreach ($banner_3_imags as $key => $value)
                        <div class="carousel-box overflow-hidden hov-scale-img">
                            <a href="{{ isset(json_decode($home_banner3_links, true)[$key]) ? json_decode($home_banner3_links, true)[$key] : '' }}"
                                class="d-block text-reset rounded-2 overflow-hidden">
                                <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                    class="img-fluid lazyload w-100 has-transition"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- Auction Product -->
    @if (addon_is_activated('auction'))
        <!-- <div id="auction_products">

        </div> -->
    @endif

    <!-- Cupon -->
    @if (get_setting('coupon_system') == 1)
        <!-- <div class="" style="background-color: {{ get_setting('cupon_background_color', '#fff9ed') }}">
            <div class="container">
                <div class="position-relative py-5">
                    <div class="text-center text-xl-left position-relative z-5">
                        <div class="d-lg-flex">
                            <div class="mb-3 mb-lg-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="109.602" height="93.34" viewBox="0 0 109.602 93.34">
                                    <defs>
                                      <clipPath id="clip-path">
                                        <path id="Union_10" data-name="Union 10" d="M12263,13778v-15h64v-41h12v56Z" transform="translate(-11966 -8442.865)" fill="none" stroke="var(--{{ get_setting('cupon_text_color') }})" stroke-width="2"/>
                                      </clipPath>
                                    </defs>
                                    <g id="Group_25375" data-name="Group 25375" transform="translate(-274.201 -5254.611)">
                                      <g id="Mask_Group_23" data-name="Mask Group 23" transform="translate(-3652.459 1785.452) rotate(-45)" clip-path="url(#clip-path)">
                                        <g id="Group_24322" data-name="Group 24322" transform="translate(207 18.136)">
                                          <g id="Subtraction_167" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                            <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"/>
                                            <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                          </g>
                                        </g>
                                      </g>
                                      <g id="Group_24321" data-name="Group 24321" transform="translate(-3514.477 1653.317) rotate(-45)">
                                        <g id="Subtraction_167-2" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                          <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"/>
                                          <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                        </g>
                                        <g id="Group_24325" data-name="Group 24325">
                                          <rect id="Rectangle_18578" data-name="Rectangle 18578" width="8" height="2" transform="translate(120 5287)" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                          <rect id="Rectangle_18579" data-name="Rectangle 18579" width="8" height="2" transform="translate(132 5287)" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                          <rect id="Rectangle_18581" data-name="Rectangle 18581" width="8" height="2" transform="translate(144 5287)" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                          <rect id="Rectangle_18580" data-name="Rectangle 18580" width="8" height="2" transform="translate(108 5287)" fill="var(--{{ get_setting('cupon_text_color') }})"/>
                                        </g>
                                      </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="ml-lg-3">
                                <h5 class="fs-36 fw-700 text-{{ get_setting('cupon_text_color') }} mb-3">{{ translate(get_setting('cupon_title')) }}</h5>
                                <h5 class="fs-20 fw-400 text-{{ get_setting('cupon_text_color') }}">{{ translate(get_setting('cupon_subtitle')) }}</h5>
                                <div class="mt-5 pt-5">
                                    <a href="{{ route('coupons.all') }}" class="btn btn-secondary rounded-2 fs-16 px-4"
                                        style="box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.16);">{{ translate('View All Coupons') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute right-0 bottom-0 h-100">
                        <img class="img-fit h-100" src="{{ uploaded_asset(get_setting('coupon_background_image', null, $lang)) }}"
                            onerror="this.onerror=null;this.src='{{ asset('assets/img/coupon.svg') }}';"
                            alt="{{ env('APP_NAME') }} promo">
                    </div>
                </div>
            </div>
        </div> -->
    @endif

    <!-- Category wise Products -->
    <!-- <div id="section_home_categories">

    </div> -->


    @if (addon_is_activated('preorder'))
        <!-- Newest Preorder Products -->
        @include('preorder.frontend.home_page.newest_preorder')
    @endif


    <!-- Classified Product -->
    @if (get_setting('classified_product') == 1)
        @php
            $classified_products = get_home_page_classified_products(6);
            $classified_section_bg = get_setting('classified_section_bg_color');
        @endphp
        @if (count($classified_products) > 0)
            <section class="mb-2 mb-md-3 mt-2rem">
                <div class="container">
                    <div class="p-3 p-md-2rem rounded-2 overflow-hidden @if(get_setting('classified_section_outline') == 1) border @endif"
                        style="background: {{ $classified_section_bg != null ? $classified_section_bg : '#fff9ed' }}; border-color: {{ get_setting('classified_section_outline_color') }} !important;">
                        <!-- Top Section -->
                        <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                            <!-- Title -->
                            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                                <span class="">{{ translate('Classified Ads') }}</span>
                            </h3>
                            <!-- Links -->
                            <div class="d-flex">
                                <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                                    href="{{ route('customer.products') }}">{{ translate('View All Products') }}</a>
                            </div>
                        </div>
                        <!-- Banner -->
                        @php
                            $classifiedBannerImage = get_setting('classified_banner_image', null, $lang);
                            $classifiedBannerImageSmall = get_setting('classified_banner_image_small', null, $lang);
                        @endphp
                        @if ($classifiedBannerImage != null || $classifiedBannerImageSmall != null)
                            <div class="mb-3 rounded-2 overflow-hidden hov-scale-img d-none d-md-block">
                                <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ uploaded_asset($classifiedBannerImage) }}"
                                    alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                            </div>
                            <div class="mb-3 rounded-2 overflow-hidden hov-scale-img d-md-none">
                                <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ $classifiedBannerImageSmall != null ? uploaded_asset($classifiedBannerImageSmall) : uploaded_asset($classifiedBannerImage) }}"
                                    alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                            </div>
                        @endif
                        <!-- Products Section -->
                        <div class="">
                            <div class="row gutters-16">
                                @foreach ($classified_products as $key => $classified_product)
                                    <div
                                        class="col-xxl-4 col-md-6 has-transition hov-shadow-out z-1">
                                        <div class="aiz-card-box py-2 has-transition">
                                            <div class="row hov-scale-img">
                                                <div class="col-4 col-md-5 mb-3 mb-md-0">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                        class="d-block rounded-2 overflow-hidden h-auto h-md-150px text-center">
                                                        <img class="img-fluid lazyload mx-auto has-transition"
                                                            src="{{ asset('assets/img/placeholder.jpg') }}"
                                                            data-src="{{ isset($classified_product->thumbnail->file_name) ? my_asset($classified_product->thumbnail->file_name) : asset('assets/img/placeholder.jpg') }}"
                                                            alt="{{ $classified_product->getTranslation('name') }}"
                                                            onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                                                    </a>
                                                </div>
                                                <div class="col py-2">
                                                    <h3
                                                        class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                                        <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                            class="d-block text-reset hov-text-primary">{{ $classified_product->getTranslation('name') }}</a>
                                                    </h3>
                                                    <div class="d-md-flex d-lg-block justify-content-between">
                                                        <div class="fs-14 mb-3">
                                                            <span
                                                                class="text-secondary">{{ $classified_product->user ? $classified_product->user->name : '' }}</span><br>
                                                            <span
                                                                class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                        </div>
                                                        @if ($classified_product->conditon == 'new')
                                                            <span
                                                                class="badge badge-md badge-inline badge-soft-info fs-13 fw-700 px-3 text-info"
                                                                style="border-radius: 20px;">{{ translate('New') }}</span>
                                                        @elseif($classified_product->conditon == 'used')
                                                            <span
                                                                class="badge badge-md badge-inline badge-soft-danger fs-13 fw-700 px-3 text-danger"
                                                                style="border-radius: 20px;">{{ translate('Used') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif

    <!-- Top Sellers -->
    @if (get_setting('vendor_system_activation') == 1)
        @php
            $best_selers = get_best_sellers(6);
            $sellers_section_bg = get_setting('sellers_section_bg_color');
        @endphp
        @if (count($best_selers) > 0)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <div class="p-3 p-md-2rem rounded-2 @if(get_setting('sellers_section_outline') == 1) border @endif"
                    style="background: {{ $sellers_section_bg != null ? $sellers_section_bg : '#fff9ed' }}; border-color: {{ get_setting('sellers_section_outline_color') }} !important; padding-bottom: 1rem !important;">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                            <span class="pb-3">{{ translate('Top Sellers') }}</span>
                        </h3>
                        <!-- Links -->
                        <div class="d-flex">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                                href="{{ route('sellers') }}">{{ translate('View All Sellers') }}</a>
                        </div>
                    </div>
                    <!-- Sellers Section -->
                    <div class="row gutters-16">
                        @foreach ($best_selers as $key => $seller)
                        <div class="col-xl-4 col-md-6 py-3 py-md-4 has-transition hov-shadow-out z-1">
                            <div class="d-flex align-items-center">
                                <!-- Shop logo & Verification Status -->
                                <div class="position-relative">
                                    <a href="{{ route('shop.visit', $seller->slug) }}"
                                        class="d-block mx-auto size-100px size-lg-120px border overflow-hidden hov-scale-img"
                                        tabindex="0"
                                        style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                        <img src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                            data-src="{{ uploaded_asset($seller->logo) }}" alt="{{ $seller->name }}"
                                            class="img-fit h-100 lazyload has-transition"
                                            onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder-rect.jpg') }}';">
                                    </a>
                                    <div class="absolute-top-left z-1 ml-2 mt-1 rounded-content bg-white">
                                        @if ($seller->verification_status == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                                viewBox="0 0 24.001 24">
                                                <g id="Group_25929" data-name="Group 25929"
                                                    transform="translate(-480 -345)">
                                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                                        cy="12" r="12" transform="translate(480 345)"
                                                        fill="#fff" />
                                                    <g id="Group_25927" data-name="Group 25927"
                                                        transform="translate(480 345)">
                                                        <path id="Union_5" data-name="Union 5"
                                                            d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                            transform="translate(0 0)" fill="#85b567" />
                                                    </g>
                                                </g>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                                viewBox="0 0 24.001 24">
                                                <g id="Group_25929" data-name="Group 25929"
                                                    transform="translate(-480 -345)">
                                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                                        cy="12" r="12" transform="translate(480 345)"
                                                        fill="#fff" />
                                                    <g id="Group_25927" data-name="Group 25927"
                                                        transform="translate(480 345)">
                                                        <path id="Union_5" data-name="Union 5"
                                                            d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                            transform="translate(0 0)" fill="red" />
                                                    </g>
                                                </g>
                                            </svg>
                                        @endif
                                    </div>
                                </div>

                                <div class="ml-2 ml-lg-4">
                                    <!-- Shop name -->
                                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 mb-1">
                                        <a href="{{ route('shop.visit', $seller->slug) }}"
                                            class="text-reset hov-text-primary" tabindex="0">{{ $seller->name }}</a>
                                    </h2>
                                    <!-- Shop Rating -->
                                    <div class="rating rating-mr-1 text-dark mb-2">
                                        {{ renderStarRating($seller->rating) }}
                                        <span class="opacity-60 fs-14">({{ $seller->num_of_reviews }}
                                            {{ translate('Reviews') }})</span>
                                    </div>
                                    <!-- Visit Button -->
                                    <a href="{{ route('shop.visit', $seller->slug) }}" class="visite-btn">
                                        <span class="button-text">{{ ucfirst(translate('Visit Store')) }}</span>
                                        <span class="icon-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif

    <!-- Top Brands -->
    @if (get_setting('top_brands') != null)
        @php
            $brands_section_bg = get_setting('brands_section_bg_color');
        @endphp
        <section class="mb-2 mb-md-3 mt-2 mt-md-3 pb-2 pb-md-3">
            <div class="container">
                <div class="p-3 p-md-2rem rounded-2 @if(get_setting('brands_section_outline') == 1) border @endif"
                    style="background: {{ $brands_section_bg != null ? $brands_section_bg : '#f0f2f5' }}; border-color: {{ get_setting('brands_section_outline_color') }} !important; padding-bottom: 1rem !important;">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">{{ translate('Top Brands') }}</h3>
                        <!-- Links -->
                        <div class="d-flex">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                                href="{{ route('brands.all') }}">{{ translate('View All Brands') }}</a>
                        </div>
                    </div>
                    <!-- Brands Section -->
                    <div class="row gutters-16">
                        @php
                            $top_brands = json_decode(get_setting('top_brands'));
                            $brands = get_brands($top_brands);
                        @endphp
                        @foreach ($brands as $brand)
                            <div class="col-xl-3 col-lg-4 col-6 my-3">
                                <a href="{{ route('products.brand', $brand->slug) }}" class="d-block has-transition hov-shadow-out z-1 hov-scale-img rounded-2 overflow-hidden">
                                    <span class="d-flex flex-column flex-sm-row align-items-center">
                                        <span class="d-flex align-items-center bg-white size-80px p-2 rounded-2 overflow-hidden">
                                            <img src="{{ $brand->logo != null ? uploaded_asset($brand->logo) : asset('assets/img/placeholder.jpg') }}"
                                            class="lazyload w-100 has-transition"
                                            alt="{{ $brand->getTranslation('name') }}"
                                            onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                                        </span>
                                        <span class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2 mt-sm-0 ml-sm-4">
                                            {{ $brand->getTranslation('name') }}
                                        </span>
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif






    

@endsection


