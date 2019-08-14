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

        <!-- Bootstrap 3.3.7 -->
        {{-- <link rel="stylesheet" href="{{asset('admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        --}}

        <!-- Select2 -->
        <link rel="stylesheet" href="{{asset('admin_assets/bower_components/select2/dist/css/select2.min.css')}}">
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
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                @include('messages.success')
                            </div>
                        </div>
                        <p></p>
                        {{-- id="contactForm" novalidate="novalidate" --}}
                        <form class="row contact_form" action="{{ route('submit.paper') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-10 col-lg-10">
                                <div class="form-group" {{$errors->has('leadauthor')?'has-error':''}}>
                                    <label for="leadauthor">Your Name <i style="color: red">*</i></label>
                                    <input type="text" class="form-control" id="leadauthor" name="leadauthor"
                                        placeholder="Enter Lead Author's Name">
                                    {!! $errors->first('leadauthor','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('email')?'has-error':''}}>
                                    <label for="email">Your Email Address <i style="color: red">*</i></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email address">
                                    {!! $errors->first('email','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('phone')?'has-error':''}}>
                                    <label for="phone">Your Phone Number <i style="color: red">*</i></label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone Number" maxlength="11">
                                    {!! $errors->first('phone','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('country_id')?'has-error':''}}>
                                    <label for="country_id">Select Country <i style="color: red">*</i></label>
                                    <select class="form-control select2" name="country_id">
                                        <option selected="disabled">Select Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('country_id','<p style="color:red">:message</p>') !!}
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group" {{$errors->has('papertitle')?'has-error':''}}>
                                    <label for="name">Your Paper Title <i style="color: red">*</i></label>
                                    <input type="text" class="form-control" id="papertitle" name="papertitle"
                                        placeholder="Paper Title">
                                    {!! $errors->first('papertitle','<p style="color:red">:message</p>') !!}
                                </div>
                                <div class="form-group" {{$errors->has('abstract')?'has-error':''}}>
                                    <label for="name">Your Paper Abstract <i style="color: red">*</i></label>
                                    <textarea class="form-control" name="abstract" id="abstract" rows="3"
                                        placeholder="Enter Abstract"></textarea>
                                    {!! $errors->first('abstract','<p style="color:red">:message</p>') !!}
                                </div>

                                <div class="form-group" {{$errors->has('filename')?'has-error':''}}>
                                    <p>Upload Paper <i style="color: red">(.doc or .docx max size: 2MB)</i></p>
                                    <input type="file" name="filename">
                                    {!! $errors->first('filename','<p style="color:red">:message</p>') !!}
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

        <!-- jQuery 3 -->
        <script src="{{asset('admin_assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset('admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('admin_assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

        <!-- SlimScroll -->
        <script src="{{asset('admin_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- FastClick -->
        <script src="{{asset('admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('admin_assets/dist/js/demo.js')}}"></script>
        <!-- Page script -->
        <script>
            $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
        </script>
    </body>

</html>