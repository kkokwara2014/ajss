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
                            <a href="{{ route('plagiarism') }}">Plagiarism</a>
                        </div>
                        <h2>About Plagiarism</h2>
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
                            <h3>About Plagiarism</h3>

                            <p style="text-align: justify">
                                Plagiarism is the use or close imitation of the language and ideas of another author and
                                representation of them as one's own original work. Duplicate publication, sometimes
                                called self-plagiarism, occurs when an author reuses substantial parts of his or her own
                                published work without providing the appropriate references. This can range from getting
                                an identical paper published in multiple journals, where authors add small amounts of
                                new data to a previous paper.
                                Plagiarism can be said to have clearly occurred when large chunks of text have been cut
                                and pasted. Such manuscripts would not be considered for publication in the Journal. But
                                minor plagiarism without dishonest intent is relatively frequent, for example when an
                                author reuses parts of an introduction from an earlier paper. The editors will judge any
                                case of which they become aware (either by their own knowledge of and reading about the
                                literature, or when alerted by referees) on its own merits. If a case where plagiarism
                                comes to light after a paper is published in AIFPU Journal of School of Science and
                                Technology, the Editors will conduct a preliminary investigation. If plagiarism is
                                found, the journal will contact the author's institute and funding agencies. A
                                determination of misconduct will lead the Journal to run a statement, bidirectionally
                                linked online to and from the original paper, to note the plagiarism and to provide a
                                reference to the plagiarized material. The paper containing the plagiarism will also be
                                obviously marked on each page of the PDF. Depending on the extent of the plagiarism, the
                                paper may also be formally retracted.
                                


                            </p>
                            <p style="text-align: justify">
                                <h4>Prior Publication</h4>
                                Material published by the author before submission in the following categories is
                                considered prior publication: <br>
                                (1) Articles published in any publication, even online-only, non-peer-reviewed
                                publications, such as Nature Preceding <br>
                                (2) Articles, book chapters, and long abstracts containing original data in figures and
                                tables, especially in proceedings publications as well as posters containing original
                                data disseminated beyond meeting attendees, e.g., displayed in websites such as that
                                maintained by F 1000; <br>
                                (3) widely circulated, copyrighted, or archival reports, such as the technical reports
                                of IBM, the preliminary reports of MIT, the institute reports of the US Army, or the
                                internal reports of NASA.
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