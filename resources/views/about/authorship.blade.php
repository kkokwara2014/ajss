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
                            <a href="#">About</a>
                            <a href="{{ route('authorship') }}">Authorship</a>
                        </div>
                        <h2>Authorship</h2>
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
                            <h3>About Authorship</h3>

                            <p style="text-align: justify">
                                Authorship is an explicit way of assigning responsibility and giving credit for
                                intellectual work. The two are linked. Authorship practices should be judged by how
                                honestly they reflect actual contributions to the final product. Authorship is important
                                to the reputation, academic promotion, and grant support of the individuals involved as
                                well as to the strength and reputation of their institution. Disputes sometimes arise
                                about who should be listed as authors of an intellectual product and the order in which
                                they should be listed. When disagreements over authorship arise, they can take a
                                substantial toll on the good will, effectiveness, and reputation of the individuals
                                involved and their academic community. Many such disagreements result from
                                misunderstanding and failed communication among colleagues and might have been prevented
                                by a clear, early understanding of standards for authorship that are shared by the
                                academic community as a whole.
                            </p>
                            <p style="text-align: justify">
                                AIFPU Journal of school of Science and Technölogy do not require all authors of a paper
                                to sign the letter of submission and will not impose an order on the list of authors.
                                Submission to Journal is taken by the Editors to mean that all the listed authors have
                                agreed on all of the contents. The corresponding (submitting) author will be responsible
                                for having ensured that this agreement has been attained and for managing all
                                correspondence between the journal and all coauthors, before and after publication. Any
                                change to the authors list after submission, such as a change in the order of the
                                authors or the deletion or addition of authors needs to be approved by a signed letter
                                from every author.
                            </p>
                            <br>
                            <h4>Minimum Requirements for Authorship</h4>
                            <p style="text-align: justify">
                                All persons designated as authors should qualify for authorship, and all• those who
                                qualify should be listed. Each author should have participated sufficiently in the work
                                to take public responsibility for appropriate portions of the content. One or more
                                authors should take responsibility for the integrity of the work as a whole, from
                                inception to published article. Authorship credit should be based only on substantial
                                contributions to conception and design, or acquisition of data, or analysis and
                                interpretation of data and final approval of the version to be published.
                            </p>
                            <p style="text-align: justify">
                                Acquisition of funding, the collection of data, or general supervision of a research
                                group, by themselves, do not justify authorship. Authors should provide a description of
                                what each contributed, and editors should publish that information. All others who
                                contributed to the work who are not authors should be named in the Acknowledgments, and
                                what they did should be described.
                            </p>

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
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Useful Links</h6>
                            <ul class="list">
                                <li><a href="{{ route('index') }}">Home</a></li>
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
                        </script> ajssaifpu.org | All rights reserved
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