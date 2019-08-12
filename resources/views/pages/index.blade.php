@extends('layout.main')

@section('content')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="banner_content">
                <h2>Akanu Ibiam Federal Polytechnic, Unwana<br />Journal of School of Science (ajssaifpu)</h2>
                <p>...providing enabling platform for publishing quality academic research.</p>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Event Time Area =================-->
<section class="event_time_area">
    <div class="container">
        <div class="event_time_inner">

            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="event_text">
                        <h5>Frequency</h5>
                        <p>Quarterly</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="event_text">
                        <h5>Email</h5>
                        <p>mailus@ajssaifpu.org</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="event_text">
                        <h5>ISSN</h5>
                        <p>0794-8646-X</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Event Time Area =================-->

<!--================Welcome Area =================-->
<section class="welcome_area pad_btm">
    <div class="container">
        <div class="welcome_inner row">

            <div class="col-lg-9 col-sm-9" style="text-align: justify">
                <div class="welcome_text">
                    <h3>Welcome to AJSSAIFPU</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                        the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace.</p>

                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div>
                   <h3><span class="fa fa-link"></span> Useful Links</h3>
                    <hr>
                    <a href="#"></a>



                </div>
                <div>
                    <h3><span class="fa fa-download"></span> Downloads</h3>
                    <hr>
                    <div> <a href="{{asset('downloads/about_authorship.pdf')}}" download="about_authorship.pdf"><span class="fa fa-file-pdf-o" style="color: red"></span> About Authorship</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Peer Review</a></div>
                    <div><a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Duplicate Publication</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> About Plagiarism</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Publication Charges</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Publication Steps</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Publication Ethics</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Publication Review Process</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Publication Guidelines</a>
                    </div>
                    <div> <a href="#"><span class="fa fa-file-pdf-o" style="color: red"></span> Mode of Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Welcome Area =================-->

<!--================Editorial Board Area =================-->
<section class="team_area p_120">
    <div class="container">
        <div class="main_title" style="text-align: left">
            <h2>Our Editorial Board</h2>
            <div style="text-align: left">If you are looking at blank cassettes on the web, you may be very confused at
                the difference in price.
                You may see some for as low as $.17 each.</div>
        </div>
        <div class="row team_inner">
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="img-fluid" src="{{asset('bootstrap_assets/img/team/team-1.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="img-fluid" src="{{asset('bootstrap_assets/img/team/team-2.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="img-fluid" src="{{asset('bootstrap_assets/img/team/team-3.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="img-fluid" src="{{asset('bootstrap_assets/img/team/team-4.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Editorial Board Area =================-->

@endsection