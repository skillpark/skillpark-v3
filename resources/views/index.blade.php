@extends('layouts.app')

@section('content')
<div class="intro-banner dark-overlay" data-background-image="images/home-background-02.jpg">

    <div class="transparent-header-spacer"></div>

    <div class="container">

        <!-- Intro Headline -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-headline">
                    <h3>
                        <strong style="font-size: 34px;">Hire experts freelancers for any job, any time.</strong>
                    </h3>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="row">
            <div class="col-md-7">
                <div class="intro-banner-search-form margin-top-75">
                    <!-- Search Field -->
                    <div class="intro-search-field" style="padding: 0px;">
                        <label for="intro-keywords" class="field-title ripple-effect">What do you wanna get
                            done?</label>
                        <input id="intro-keywords" type="text" placeholder="e.g. laravel web application">
                    </div>

                    <!-- Button -->
                    <div class="intro-search-button">
                        <button style="border-radius:0px" class="button ripple-effect"
                            onclick="window.location.href=''">Search</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="intro-stats margin-top-35 hide-under-992px">
                    <li>
                        @guest
                        @if (Route::has('register'))
                        <strong style="margin-bottom: 7px">Sign Up</strong>
                        <span><a href=" {{ route('register')}} " class="button gray ripple-effect button-sliding-icon"
                                style="padding: 5px;border-radius:0px;border: 1px solid white;color:white;background-color:transparent ">{{ __('Join Now') }}
                                <i class="icon-feather-arrow-right"></i></a></span>
                        @endif
                        @else
                        <strong style="margin-bottom: 7px">Welcome</strong>
                        <span><a href=" {{ url('home')}} " class="button gray ripple-effect button-sliding-icon"
                                style="padding: 5px;border-radius:0px;border: 1px solid white;color:white;background-color:transparent ">{{ __('Start Freelancing') }}
                                <i class="icon-feather-arrow-right"></i></a></span>

                        @endguest
                    </li>
                    <li>
                        <strong style="margin-bottom: 7px">Post Projects</strong>
                        <span>It's free.</span>
                    </li>
                    <li>
                        <strong style="margin-bottom: 7px">Choose Experts</strong>
                        <span>Get Your Jobs Done.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div class="section margin-top-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-headline margin-top-0 margin-bottom-10">
                    <h3 style="font-size: 22px;">Explore Marketplace</h3>
                    <a href="" class="headline-link">Browse All Categories</a>
                </div>
                <div class="categories-container">

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-01.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Web & Software Dev</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-02.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Data Science & Analitycs</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-03.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Accounting & Consulting</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-04.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Writing & Translations</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-05.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Sales & Marketing</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-06.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Graphics & Design</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-07.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Digital Marketing</h3>
                        </div>
                    </a>

                    <!-- Category Box -->
                    <a href="#" class="category-box">
                        <div class="category-box-icon">
                            <img src="/images/categories/title-category-08.svg"
                                style="width: 60px;border-bottom:2px solid #666;margin-bottom:10px">
                        </div>
                        <div class="category-box-content">
                            <h3>Education & Training</h3>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="section padding-top-45">
    <!-- Logo Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- Carousel -->
                <center><b>
                        <p style="margin-bottom:0;margin-top:30px;font-size:16px;">Thousands Businesses Trust SKILLPARK
                        </p>
                    </b></center>
                <div class="col-md-16">

                    <div class="logo-carousel">

                        <div class="carousel-item">
                            <img src="images/logo-carousel-01.png" alt="eSewa">
                        </div>

                        <div class="carousel-item">
                            <img src="images/logo-carousel-02.png" alt="Foodmandu">
                        </div>

                        <div class="carousel-item">
                            <img src="images/logo-carousel-03.jpg" alt="Worldlink">
                        </div>

                        <div class="carousel-item">
                            <img src="images/logo-carousel-04.png" alt="Microsoft Nepal">
                        </div>

                        <div class="carousel-item">
                            <img src="images/logo-carousel-05.png" alt="Gadgetbyte">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Icon Boxes -->
<div class="section padding-top-55 padding-bottom-80">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <!-- Section Headline -->
                <div class="section-headline centered margin-top-0 margin-bottom-5">
                    <h3>How It Works?</h3>
                </div>
            </div>

            <div class="col-xl-4 col-md-4">
                <!-- Icon Box -->
                <div class="icon-box with-line">
                    <!-- Icon -->
                    <div class="icon-box-circle">
                        <div class="icon-box-circle-inner">
                            <i class="icon-line-awesome-lock"></i>
                            <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                        </div>
                    </div>
                    <h3>Create an Account</h3>
                    <p>Get Registered to our Website via any of your Social Accounts. It's simple, secure and
                        <b>free</b></p>
                </div>
            </div>

            <div class="col-xl-4 col-md-4">
                <!-- Icon Box -->
                <div class="icon-box with-line">
                    <!-- Icon -->
                    <div class="icon-box-circle">
                        <div class="icon-box-circle-inner">
                            <i class="icon-line-awesome-legal"></i>
                            <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                        </div>
                    </div>
                    <h3>Post a Project</h3>
                    <p>Upload your Project Information to get Bids from our experienced Freelancers and Agencies.</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-4">
                <!-- Icon Box -->
                <div class="icon-box">
                    <!-- Icon -->
                    <div class="icon-box-circle">
                        <div class="icon-box-circle-inner">
                            <i class=" icon-line-awesome-trophy"></i>
                            <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                        </div>
                    </div>
                    <h3>Choose an Expert</h3>
                    <p>Take a look at the Proposals from the Experts and Choose the Qualified Candidate for your
                        Project.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="section margin-top-0 margin-bottom-55">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <div class="section-headline centered margin-top-0 margin-bottom-45">
                    <h3>Popular Categories</h3>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">

                <a href="" class="photo-box small" data-background-image="images/categories/job-category-01.jpg">
                    <div class="photo-box-content">
                        <h3>Web / Software Dev</h3>
                        <span>612</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-02.jpg">
                    <div class="photo-box-content">
                        <h3>Data Science / Analitycs</h3>
                        <span>113</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-03.jpg">
                    <div class="photo-box-content">
                        <h3>Accounting / Consulting</h3>
                        <span>186</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-04.jpg">
                    <div class="photo-box-content">
                        <h3>Writing & Translations</h3>
                        <span>298</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-05.jpg">
                    <div class="photo-box-content">
                        <h3>Sales & Marketing</h3>
                        <span>549</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-06.jpg">
                    <div class="photo-box-content">
                        <h3>Graphics & Design</h3>
                        <span>873</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-07.jpg">
                    <div class="photo-box-content">
                        <h3>Digital Marketing</h3>
                        <span>125</span>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="" class="photo-box small" data-background-image="images/categories/job-category-08.jpg">
                    <div class="photo-box-content">
                        <h3>Education & Training</h3>
                        <span>445</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="photo-section" data-background-image="images/section-background.jpg">

    <div class="text-content white-font">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2>Hire experts or be hired. <br> For any job, any time.</h2>
                    <a href="{{ route('register')}}"
                        class="button button-sliding-icon ripple-effect big margin-top-20">Get Started <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- Counters -->
<div class="section padding-top-70 padding-bottom-75">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <!-- Section Headline -->
                <div class="section-headline centered margin-top-0 margin-bottom-50">
                    <h3>Growing Everyday</h3>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="counters-container">

                    <!-- Counter -->
                    <div class="single-counter">
                        <i class="icon-line-awesome-suitcase"></i>
                        <div class="counter-inner">
                            <h3><span class="counter">1,586</span></h3>
                            <span class="counter-title">Companies</span>
                        </div>
                    </div>

                    <!-- Counter -->
                    <div class="single-counter">
                        <i class="icon-line-awesome-legal"></i>
                        <div class="counter-inner">
                            <h3><span class="counter">3,543</span></h3>
                            <span class="counter-title">Project Posted</span>
                        </div>
                    </div>

                    <!-- Counter -->
                    <div class="single-counter">
                        <i class="icon-line-awesome-user"></i>
                        <div class="counter-inner">
                            <h3><span class="counter">2,413</span></h3>
                            <span class="counter-title">Active Members</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection