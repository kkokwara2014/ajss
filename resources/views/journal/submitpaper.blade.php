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
                            <a href="#">Submit Paper</a>
                        </div>
                        <h2>Submit Paper</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Submit Paper Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="welcome_text">
                    <h3>Submit Paper</h3>
                </div>
                <div class="row">

                    <div class="col-lg-9">
                        <p>
                            Please report any difficulty on using the online paper submission
                            or failure in getting acknowledgment letter after 24 hrs
                            to <strong>papersubmission@ajssaifpu.org</strong>
                        </p>
                        <br>

                        @include('messages.success')
                        <p></p>
                        {{-- id="contactForm" novalidate="novalidate" --}}
                        <form class="row contact_form" action="{{ route('submit.paper') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-10 col-lg-10">
                                <div class="form-group">
                                    <label for="leadauthor">Your Name <i style="color: red">*</i></label>
                                    <input type="text" class="form-control" id="leadauthor" name="leadauthor"
                                        placeholder="Enter Lead Author's Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email Address <i style="color: red">*</i></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email address">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Your Phone Number <i style="color: red">*</i></label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone Number" maxlength="14">
                                </div>
                                {{-- <div class="input-group-icon mt-10 form-group">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select2">
                                        <select name="country_id">
                                            <option selected="disabled">Select Country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                                </select>
                            </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="country_id">Select Country <i style="color: red">*</i></label>
                        <div class="default-select" id="default-select">
                            <select class="form-control">
                                <option selected="disabled">Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Your Paper Title <i style="color: red">*</i></label>
                        <input type="text" class="form-control" id="papertitle" name="papertitle"
                            placeholder="Paper Title">
                    </div>
                    <div class="form-group">
                        <label for="name">Your Paper Abstract <i style="color: red">*</i></label>
                        <textarea class="form-control" name="abstract" id="abstract" rows="3"
                            placeholder="Enter Abstract"></textarea>
                    </div>

                    <div class="form-group">
                        <p>Upload Paper <i style="color: red">(.doc or .docx max size: 2MB)</i></p>
                        <input type="file" name="filename">
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <button type="submit" value="submit" class="btn submit_btn">Submit</button>
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
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Useful Links</h6>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="{{ route('contact.us') }}">Contact</a></li>
                                <li><a href="#">Editorial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Publication</h6>
                            <ul class="list">
                                <li><a href="#">Charges</a></li>
                                <li><a href="#">Steps</a></li>
                                <li><a href="#">Ethics</a></li>
                                <li><a href="#">Review Process</a></li>
                                <li><a href="#">Guidelines</a></li>
                                <li><a href="#">Mode of Payment</a></li>
                                <li><a href="#">Check Paper Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Special Events</h6>
                            <ul class="list">
                                <li><a href="#">Call for Conference</a></li>
                                <li><a href="#">Future Conference</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Downloads</h6>
                            <ul class="list">
                                <li><a href="#">Copyright Form</a></li>
                                <li><a href="#">Paper Template</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0">

                        Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> ajss.org | All rights reserved
                        {{-- <div class="col-lg-4 col-md-4 footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div> --}}
                </div>
            </div>
        </footer>
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