        
@extends('layout.main')

@section('content')
            <!--================Home Banner Area =================-->
            <section class="home_banner_area">
                <div class="banner_inner">
                    <div class="container">
                        <div class="banner_content">
                            <h2>International Digital <br />Business Event</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                            <a class="banner_btn" href="#">View More Details</a>
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
                            <div class="col-lg-6">
                                <div class="event_text">
                                    <h3>Next Event will Start in</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="timer_inner">
                                    <div id="timer" class="timer">
                                        <div class="timer__section days">
                                            <div class="timer__number"></div>
                                            <div class="timer__label">days</div>
                                        </div>
                                        <div class="timer__section hours">
                                            <div class="timer__number"></div>
                                            <div class="timer__label">hours</div>
                                        </div>
                                        <div class="timer__section minutes">
                                            <div class="timer__number"></div>
                                            <div class="timer__label">Minutes</div>
                                        </div>
                                        <div class="timer__section seconds">
                                            <div class="timer__number"></div>
                                            <div class="timer__label">seconds</div>
                                        </div>
                                    </div>
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
                        <div class="col-lg-5">
                            <div class="welcome_img">
                                <img class="img-fluid" src="{{asset('bootstrap_assets/img/welcome-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="welcome_text">
                                <h3>Welcome to Eventure</h3>
                                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
                                <a class="main_btn" href="#">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================End Welcome Area =================-->
            
            <!--================Team Area =================-->
            <section class="team_area p_120">
                <div class="container">
                    <div class="main_title">
                        <h2>Meet Head Speakers</h2>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
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
            <!--================End Team Area =================-->
            
           
            
            
            
            <!--================Price Area =================-->
            {{-- <section class="price_area p_120">
                <div class="container">	
                    <div class="main_title">
                        <h2>Ticket Pricing</h2>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                    </div>
                    <div class="price_inner row m0">
                        <div class="col-lg-3 col-sm-6 p0">
                            <div class="price_item">
                                <div class="price_text">
                                    <h3>Basic</h3>
                                    <h5>Individuals/Freelancers</h5>
                                    <h2>£39<span>/mo</span></h2>
                                    <ul class="list">
                                        <li><a href="#">RAM 1 GB</a></li>
                                        <li><a href="#">Core CPU 1</a></li>
                                        <li><a href="#">SSD Storage 20 GB</a></li>
                                        <li><a href="#">Transfer 1 TB</a></li>
                                        <li><a href="#">Network In 40 Gb</a></li>
                                    </ul>
                                </div>
                                <a class="price_btn" href="#">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p0">
                            <div class="price_item">
                                <div class="price_text">
                                    <h3>Starter</h3>
                                    <h5>Small Companies</h5>
                                    <h2>£59<span>/mo</span></h2>
                                    <ul class="list">
                                        <li><a href="#">RAM 2 GB</a></li>
                                        <li><a href="#">Core CPU 2</a></li>
                                        <li><a href="#">SSD Storage 50 GB</a></li>
                                        <li><a href="#">Transfer 1 TB</a></li>
                                        <li><a href="#">Network In 40 Gb</a></li>
                                    </ul>
                                </div>
                                <a class="price_btn" href="#">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p0">
                            <div class="price_item">
                                <div class="price_text">
                                    <h3>Business</h3>
                                    <h5>Medium Companies</h5>
                                    <h2>£79<span>/mo</span></h2>
                                    <ul class="list">
                                        <li><a href="#">RAM 4 GB</a></li>
                                        <li><a href="#">Core CPU 4</a></li>
                                        <li><a href="#">SSD Storage 75 GB</a></li>
                                        <li><a href="#">Transfer 2 TB</a></li>
                                        <li><a href="#">Network In 80 Gb</a></li>
                                    </ul>
                                </div>
                                <a class="price_btn" href="#">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p0">
                            <div class="price_item">
                                <div class="price_text">
                                    <h3>Enterprise</h3>
                                    <h5>Large Companies</h5>
                                    <h2>£99<span>/mo</span></h2>
                                    <ul class="list">
                                        <li><a href="#">RAM 8 GB</a></li>
                                        <li><a href="#">Core CPU 8</a></li>
                                        <li><a href="#">SSD Storage 100 GB</a></li>
                                        <li><a href="#">Transfer 2 TB</a></li>
                                        <li><a href="#">Network In 100 Gb</a></li>
                                    </ul>
                                </div>
                                <a class="price_btn" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!--================End Price Area =================-->
@endsection