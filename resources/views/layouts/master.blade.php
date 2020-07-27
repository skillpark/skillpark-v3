<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Skillpark">
    <meta name="author" content="Skillpark">
    <title>Skillpark Inc. - Hire Expert Freelancers Any Time</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/fav-miver.svg">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">
    <link href="/css/profileheader.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/datepicker.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        #header-full,
        #header-scroll {
            position: fixed;
            z-index: 9999;
            width: 100%;
            top: 0px;
        }

        @media (max-width: 767px) and (min-width: 0px) {
            #header-scroll {
                display: none !important;
            }

            #header-full {
                display: block !important;
            }
        }
    </style>
</head>

<body>
    <!-- Search Model Start -->
    <div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header sheader">
                    <button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="srch-input" placeholder="Search Keywords...">
                </div>
            </div>
        </div>
    </div>
    <!-- Search Model End -->
    <!-- Header Start -->
    <header>
        <div class="sub-header" id="header-full">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-sm-start">
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="{{ url('/') }}"><img src="/images/logo.svg" width="120" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('how-it-works') }}">About <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ url('/') }}">Enterprise</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Explore</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="{{ url('/') }}">Companies</a>
                                            <a class="link-item" href="{{ url('/') }}">Freelancers</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            Categories
                                        </a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Graphics &amp; Design</a>
                                            <a class="link-item" href="#">Digital Marketing</a>
                                            <a class="link-item" href="#">Writing &amp; Translation</a>
                                            <a class="link-item" href="#">Video &amp; Animation</a>
                                            <a class="link-item" href="#">Lifestyle</a>
                                            <a class="link-item" href="#">Sitemap</a>
                                            <a class="link-item" href="#">Music &amp; Audio</a>
                                            <a class="link-item" href="#">Programming &amp; Tech</a>
                                            <a class="link-item" href="#">Business</a>
                                        </div>
                                    </li>
                                </ul>
                                @guest
                                <a href="{{ route('login') }}" class="add-post">Login</a>
                                <a href="{{ route('register') }}" class="add-project">Signup</a>
                                @else
                                <a href="{{ route('home') }}" class="add-post">Dashboard</a>
                                @endguest
                            </div>
                            <div class="responsive-search order-1">
                                <input type="text" class="rsp-search" placeholder="Search...">
                                <i class="fas fa-search r-sh1"></i>
                            </div>
                        </nav>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div id="header-scroll">
        <nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0" style="padding: 7px !important;font-size:13px;">
            <div class="container">
                <!-- Sidebar Toggle (Topbar) -->
                <a class="navbar-brand" href=""><img src="/images/logo.svg" alt=""></a>
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-200 navbar-search">
                    <div class="input-group" style="width: 300px;">
                        <input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2" style="font-size: 13px;">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button" style="font-size: 13px;">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav align-items-center ml-auto">
                    <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group" style="width: 350px;">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav align-self-stretch">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('how-it-works') }}">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/') }}">Enterprise</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Explore</a>
                                <div class="dropdown-menu pages-dropdown">
                                    <a class="link-item" href="{{ url('/') }}">Companies</a>
                                    <a class="link-item" href="{{ url('/') }}">Freelancers</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                    Categories
                                </a>
                                <div class="dropdown-menu pages-dropdown">
                                    <a class="link-item" href="#">Graphics &amp; Design</a>
                                    <a class="link-item" href="#">Digital Marketing</a>
                                    <a class="link-item" href="#">Writing &amp; Translation</a>
                                    <a class="link-item" href="#">Video &amp; Animation</a>
                                    <a class="link-item" href="#">Lifestyle</a>
                                    <a class="link-item" href="#">Sitemap</a>
                                    <a class="link-item" href="#">Music &amp; Audio</a>
                                    <a class="link-item" href="#">Programming &amp; Tech</a>
                                    <a class="link-item" href="#">Business</a>
                                </div>
                            </li>
                        </ul>
                        @guest
                        <a href="{{ route('login') }}" class="add-post">Login</a>
                        <a href="{{ route('register') }}" class="add-project">Signup</a>
                        @else
                        <a href="{{ route('home') }}" class="add-post">Dashboard</a>
                        @endguest
                    </div>
                </ul>
            </div>
        </nav>
        <!-- Navigation -->
        <nav id="third-header-scroll" class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Logo Design
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Web Application</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog Writing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Legal Advices
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Voice Over
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Graphics Design
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Video Editing
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                iOS App Dev
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Help Center
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="become-a-s">
                            <i class="fa fa-fw fa-trophy"></i>
                            <span>Become A Seller</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- footer Start -->
    <footer class="footer">
        <div class="subscribe-newsletter">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="subcribes">
                            <div class="text-step1">
                                <div class="btext-heading mt-2" style="color:#acacac; font-size:14px;">
                                    <i class="fas fa-check-circle"></i>All Rights Reserved &reg; Sushant Poudel, Nitika
                                    Bhatta and Divesh Thapa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="about-jobby">
                        <a href=""><img src="/images/logo.svg" alt=""></a>
                        <p>SKILLPARK INC. is a incorporated company which is legally acceptable nationwide. The
                            application is a Nepal National Payment Gateway Verified website. Trusted by the Government
                            of Nepal. &copy; Skillpark Inc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>About</h4>
                        <ul class="list">
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press &amp; News</a></li>
                            <li><a href="#">Partnerships</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Intellectual Property Claims</a></li>
                            <li><a href="#" target="_blank">Investor Relations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>Support</h4>
                        <ul class="list">
                            <li><a href="#">Help &amp; Support</a></li>
                            <li><a href="#">Trust &amp; Safety</a></li>
                            <li><a href="#">Selling on Skillpark
                                </a>
                            </li>
                            <li><a href="#">Buying on Skillpark
                                </a>
                            </li>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>Categories</h4>
                        <ul class="list">
                            <li><a href="#">Graphics &amp; Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Writing &amp; Translation</a></li>
                            <li><a href="#">Video &amp; Animation</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Music &amp; Audio</a></li>
                            <li><a href="#">Programming &amp; Tech</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="footer-links">
                        <h4>Community</h4>
                        <ul class="list">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Community Standards</a></li>
                            <li><a href="#">Invite a Friend</a></li>
                            <li><a href="#">Become a Seller</a></li>
                            <li><a href="#">Skillpark Elevate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-social">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            Copyright 2020 <i class="far fa-copyright"></i><a href="{{ url('/') }}">Skillpark Inc.</a>.
                            All Right Reserved.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->
    <!-- Scroll to Top Button Start -->
    <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!-- Scroll to Top Button End -->
    <script>
        $("#header-scroll").hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 150) {
                $('#header-scroll').slideDown(300);
                $('#header-full').slideUp(300);
            } else {
                $('#header-scroll').slideUp(300);
                $('#header-full').slideDown(300);
            }
        });
    </script>

    <!-- Scripts js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/datepicker.min.js"></script>
    <script src="/js/i18n/datepicker.en.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/semantic/semantic.min.js"></script>
    <script src="/js/custom1.js"></script>

</body>

</html>