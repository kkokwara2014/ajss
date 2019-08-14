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
                            <a href="index.html">Home</a>
                            <a href="contact.html">Contact</a>
                        </div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">

                <div class="welcome_text">
                    <h3>Contact Us</h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="contact_info">

                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+234 (0) 803 888 3919</a></h6>
                                <p>24/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">mailus@ajssaifpu.org</a></h6>
                                <p>Send us email</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-map-marker"></i>
                                <h6><a href="#">Akanu Ibiam Fed. Poly. Unwana,
                                        Afikpo. Ebonyi State, Nigeria.
                                    </a></h6>
                                <p>Visit us</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        @include('messages.success')
                        <p></p>
                        {{-- novalidate="novalidate" --}}
                        <form class="row contact_form" action="{{ route('contact.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-12 col-lg-12">
                                <label for="name">Your Full Name <i style="color:red">*</i></label>
                                <div class="form-group" {{$errors->has('name')?'has-error':''}}>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                    {!! $errors->first('name','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('email')?'has-error':''}}>
                                    <label for="name">Email Address <i style="color:red">*</i></label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter email address">
                                    {!! $errors->first('email','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('subject')?'has-error':''}}>
                                    <label for="name">Subject <i style="color:red">*</i></label>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                                    {!! $errors->first('subject','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('msg')?'has-error':''}}>
                                    <label for="name">Message <i style="color:red">*</i></label>
                                    <textarea class="form-control" name="msg" rows="1" placeholder="Enter Message">
                                    </textarea>
                                    <p></p>
                                    {!! $errors->first('msg','<p style="color:red">:message</p>') !!}
                                </div>
                                <div>
                                    <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        @include('layout.rightsidebar')
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <!--================ start footer Area  =================-->
        @include('layout.footerwriteup')
        <!--================ End footer Area  =================-->

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->




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
        <script src="{{asset('bootstrap_assets/js/mail-script.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.counterup.js')}}"></script>
        <!-- contact js -->
        <script src="{{asset('bootstrap_assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/contact.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('bootstrap_assets/js/gmaps.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/theme.js')}}"></script>
    </body>

</html>