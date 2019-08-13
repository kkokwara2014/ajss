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
        <div class="welcome_text">
            <h3>Welcome to AJSSAIFPU</h3>
        </div>
        <div class="welcome_inner row">

            <div class="col-lg-9 col-sm-9" style="text-align: justify">
                <div class="welcome_text">

                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                        the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace.</p>

                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                @include('layout.rightsidebar')
            </div>
        </div>
    </div>
</section>
<!--================End Welcome Area =================-->

<!--================Editorial Board Area =================-->
<section class="team_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="main_title" style="text-align: left">
                    <h2>Editorial Board</h2>
                    <div style="text-align: justify">Our outstanding Editorial Board team are working round the clock to
                        ensure that quality research work are published. Submitted papers are thoroughly reviewed before
                        publication is made. To see details of Editorial Board,  
                        <a href="{{ route('editors') }} " class="badge badge-info"> Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main_title" style="text-align: left">
                    <h2>Special Events</h2>
                    <div style="text-align: justify">
                        AJSSAIFPU ensure that other activities which promote sharing of quality 
                        research work keep happening throughotu the year. You can visit our 
                        <a href="{{ route('callforpaper') }}" class="badge badge-info"> Call for Conference</a> page or 
                        <a href="{{ route('futureconference') }}" class="badge badge-info"> Future Conference</a> page <br>
                        to get more information.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--================End Editorial Board Area =================-->

@endsection