@extends('layout.app')

@section('content')
    <div class="page-title jarallax black-overlay-20" data-jarallax data-speed="0.6"
        style="background-image: url('img/content/bgs/bg1.jpg');">
        <div class="container">
            <h1>About us</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-12 offset-md-1">
                    <div class="section-heading center-holder"><small>We're thinking big</small>
                        <h2 class="bold">Delivering results <span class="italic libre-baskerville">that
                                endure</span><br>Technology consultants to the world</h2>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content-big center-holder mt-25">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="center-holder mt-10"><a href="#" class="button-md primary-button">More About Us</a></div> --}}
        </div>
    </div>
    <div class="container-fluid grey-bg pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-5 col-sm-5 col-12">
                <div class="full-background" style="background-image: url(img/content/about/aboutbg2.jpg);"></div>
            </div>
            <div class="col-md-7 col-sm-7 col-12">
                <div class="padding-10-perc">
                    <div class="section-heading left-holder"><small>Giving your business direction.</small>
                        <h3 class="bold">Know your environment. Creating the environment for business.</h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content-big">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse.</p>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="pie-chart pie-chart-sm">
                                <div class="chart-percent"><span class="chart" data-percent="80" data-width="7"
                                        data-size="130" data-color="#2387ea"><span class="percent"></span></span>
                                </div>
                                <h4>Search Analysis</h4>
                                <h5 class="italic libre-baskerville">Thought Leadership</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="pie-chart pie-chart-sm">
                                <div class="chart-percent"><span class="chart" data-percent="65" data-width="7"
                                        data-size="130" data-color="#2387ea"><span class="percent"></span></span>
                                </div>
                                <h4>SEO Conversion</h4>
                                <h5 class="italic libre-baskerville">Professional Approach</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="pie-chart pie-chart-sm">
                                <div class="chart-percent"><span class="chart" data-percent="75" data-width="7"
                                        data-size="130" data-color="#2387ea"><span class="percent"></span></span>
                                </div>
                                <h4>SEO Content Strategy</h4>
                                <h5 class="italic libre-baskerville">User Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <h3 class="bold">First class business solutions since 1997.</h3>
                <div class="section-heading-line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt
                    ut<br>labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="row mt-40">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 center-holder"><i
                            class="icon-shield-1"></i>
                        <h4>Business Solutions</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore .
                        </p>
                        {{-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 center-holder"><i
                            class="icon-target2"></i>
                        <h4>High Performance</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore .
                        </p>
                        {{-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 center-holder"><i
                            class="icon-compass2"></i>
                        <h4>Professional Approach</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore .
                        </p>
                        {{-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid grey-bg pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-5 col-sm-5 col-12">
                <div class="full-background" style="background-image: url(img/content/about/aboutbg3.jpg);"></div>
            </div>
            <div class="col-md-7 col-sm-7 col-12">
                <div class="padding-10-perc">
                    <div class="section-heading left-holder"><small>Giving your business direction.</small>
                        <h3 class="bold">Creating real wealth, Developing people. Delivering results.</h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content-big">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse.</p>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-4 col-sm-4 col-12">
                            <div class="countup-box-2-sm left-holder lighter">
                                <h3 class="countup">279</h3><span>+</span>
                                <h5>Social media audit</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12">
                            <div class="countup-box-2-sm left-holder lighter">
                                <h3 class="countup">175</h3><span>%</span>
                                <h5>Profit Increase</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12">
                            <div class="countup-box-2-sm left-holder lighter">
                                <h3 class="countup">250</h3><span>%</span>
                                <h5>Traffic Increase</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="owl-carousel owl-theme carousel-single-item-autoplay">
                <div class="testmonial-simple"><img src="img/content/testmonials/t-5.jpg" alt="img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit essecillum dolore eu fugiat nulla pariatur.</p>
                    <div class="testmonial-simple-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    <h3>Sterling Cochran</h3>
                    <h4>/ Web Developer</h4>
                </div>
                <div class="testmonial-simple"><img src="img/content/testmonials/t-6.jpg" alt="img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit essecillum dolore eu fugiat nulla pariatur.</p>
                    <div class="testmonial-simple-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    <h3>Angeline Beck</h3>
                    <h4>/ Loan Officer</h4>
                </div>
                <div class="testmonial-simple"><img src="img/content/testmonials/t-7.jpg" alt="img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit essecillum dolore eu fugiat nulla pariatur.</p>
                    <div class="testmonial-simple-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <h3>Arthur Hudson</h3>
                    <h4>/ HR Manager</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block-grey section-sm">
        <div class="container">
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"> <img src="img/content/clients/c-1.png" alt="img"> </div>
                <div class="item"> <img src="img/content/clients/c-2.png" alt="img"> </div>
                <div class="item"> <img src="img/content/clients/c-3.png" alt="img"> </div>
                <div class="item"> <img src="img/content/clients/c-4.png" alt="img"> </div>
                <div class="item"> <img src="img/content/clients/c-5.png" alt="img"> </div>
                <div class="item"> <img src="img/content/clients/c-6.png" alt="img"> </div>
            </div>
        </div>
    </div>
@endsection
