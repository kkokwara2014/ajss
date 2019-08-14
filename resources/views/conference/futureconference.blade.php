<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('bootstrap_assets/img/ajssaifpu_logo.jpg')}}" type="image/png/jpg">
        <title>{{ $title }}</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/responsive.css')}}">
    </head>

    <body>

        <!--================Header Menu Area =================-->
        @include('layout.headmenu')
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                    data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <div class="page_link">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="#">Conference</a>
                            <a href="#">Future Conference</a>
                        </div>
                        <h2>Future Conference</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Welcome Area =================-->
        <section class="welcome_area pad_btm">
            <div class="container">

                <div class="welcome_inner row" style="margin-top: 50px;">

                    <div class="col-lg-9 col-sm-9">
                        <div class="welcome_text">
                            <h3>Future Conference</h3>

                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
                                <div class="card">
                                    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="white-text font-weight-bold" data-toggle="collapse"
                                                href="#collapse96" aria-expanded="true" aria-controls="collapse96">
                                                1<sup>st</sup> INTERNATIONAL CONFERENCE AND EXHIBITION
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse96" class="collapse" role="tabpanel"
                                        aria-labelledby="heading96" data-parent="#accordionEx23">
                                        <div class="card-body">
                                            <div class="row my-4">
                                                <div class="col-md-12">
                                                    <h4 class="font-weight-bold mb-3 black-text">
                                                        THEME : INNOVATIONS IN SCIENCE AND TECHNOLOGY: A TOOL FOR ECONOMIC DIVERSIFICATION.
                                                    </h4>
                                                    <p style="text-align: justify">
                                                            <div><span class="fa fa-calendar-check-o fa-2x"></span> 
                                                                Wed. 9th - Fri. 11th Octorber, 2019. 
                                                            </div> <br>
                                                            <div><span class="fa fa-clock-o fa-2x"></span> 
                                                                10:00 AM Daily
                                                            </div> <br>
                                                            <div><span class="fa fa-map-marker fa-2x"></span> 
                                                                Old Lecture Theatre, Akanu Ibiam Federal Polytechnic, 
                                                                Unwana, Afikpo. Ebonyi State.
                                                            </div> <br>
                                                    </p>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card">
                                    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="collapsed font-weight-bold white-text" data-toggle="collapse"
                                                href="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                                I am the second title of accordion
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97"
                                        data-parent="#accordionEx23">
                                        <div class="card-body">
                                            <div class="row my-4">
                                                <div class="col-md-8">
                                                    <h2 class="font-weight-bold mb-3 black-text">Hi! I am the second
                                                        one.</h2>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam, quis nostrud exercitation
                                                        ullamco laboris</p>
                                                    <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate
                                                        velit esse cillum dolore eu
                                                        fugiat nulla pariatur.</p>
                                                </div>
                                                <div class="col-md-4 mt-3 pt-2">
                                                    <div class="view z-depth-1">
                                                        <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="collapsed font-weight-bold white-text" data-toggle="collapse"
                                                href="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                                I am the third title of accordion
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98"
                                        data-parent="#accordionEx23">
                                        <div class="card-body">
                                            <div class="row my-4">
                                                <div class="col-md-8">
                                                    <h2 class="font-weight-bold mb-3 black-text">Hi! I am the third one.
                                                    </h2>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam, quis nostrud exercitation
                                                        ullamco laboris</p>
                                                    <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate
                                                        velit esse cillum dolore eu
                                                        fugiat nulla pariatur.</p>
                                                </div>
                                                <div class="col-md-4 mt-3 pt-2">
                                                    <div class="view z-depth-1">
                                                        <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <!--Accordion wrapper-->

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        @include('layout.rightsidebar')
                    </div>
                </div>
            </div>
        </section>
        <!--================End Welcome Area =================-->







        <!--================ start footer Area  =================-->
        @include('layout.footerwriteup')
        <!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('bootstrap_assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/popper.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/stellar.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/flipclock/timer.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.counterup.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/mail-script.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('bootstrap_assets/js/gmaps.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/theme.js')}}"></script>
    </body>

</html>