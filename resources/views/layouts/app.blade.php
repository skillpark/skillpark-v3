<!Doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'SkillPark | Any Job Any Time') }}</title>
    <link rel="icon" type="image/png" href="images/titlelogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">
</head>

<script>
document.title = '@auth {{ Auth::user()->name }} | @endauth Skillpark Inc - Any Job Any Time';
</script>

<body>

    <div id="wrapper" class="wrapper-with-transparent-header">
        <header id="header-container" class="fullwidth transparent-header">
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <div id="logo" style="border: none;">
                            <a href="{{ url('/') }}"><img src="images/logo.png" alt=""></a>
                        </div>
                        @guest
                        <nav id="navigation" style="float: right;margin-right:100px;">
                            <ul id="responsive">
                                <li><a href="{{ url('creators') }}">CREATORS</a></li>

                                <li><a href="{{ url('how-it-works') }}">HOW IT WORKS</a></li>

                                <li><a href="{{ route('login') }}" style="font-weight: 600;">LOGIN</a></li>
                            </ul>
                        </nav>

                        <div class="clearfix"></div>
                    </div>
                    @if (Route::has('register'))
                    <div class="right-side">
                        <div class="header-widget" style="padding: 0;">
                            <a href="{{ route('register') }}" style="top: 20%;background-color:#0bb744;color:white;"
                                class="button gray ripple-effect">Register</a>
                        </div>
                    </div>

                    @endif
                    @else

                    <div class="right-side">
                        <div class="header-widget" style="padding: 0;">
                            <a href="{{ url('home') }}" style="top: 20%;background-color:#0bb744;color:white;"
                                class="button gray ripple-effect button-sliding-icon">Dashboard <i
                                    class="icon-material-outline-arrow-forward"></i></a>
                        </div>
                    </div>
                    <!-- Right Side Content / End -->
                    @endguest

                    <span class="mmenu-trigger" style="top:-62px;right:110px">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </span>
                </div>
            </div>

        </header>

        <div class="clearfix"></div>

        @yield('content')

        <div id="footer">
            <div class="footer-middle-section" style="padding-bottom: 40;">
                <div class="container">
                    <div class="row">

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="#"><span>IT & Network</span></a></li>
                                    <li><a href="#"><span>Software</span></a></li>
                                    <li><a href="#"><span>Data Analysis</span></a></li>
                                    <li><a href="#"><span>Writing</span></a></li>
                                    <li><a href="#"><span>Translation</span></a></li>
                                    <li><a href="#"><span>Lifestyle</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>About</h3>
                                <ul>
                                    <li><a href="#"><span>Partnerships</span></a></li>
                                    <li><a href="#"><span>Press & News</span></a></li>
                                    <li><a href="#"><span>Privacy Policy</span></a></li>
                                    <li><a href="#"><span>Terms of Services</span></a></li>
                                    <li><a href="#"><span>Careers</span></a></li>
                                    <li><a href="#"><span>Plans & Pricing</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#"><span>Careers</span></a></li>
                                    <li><a href="#"><span>Skillpark Foundation</span></a></li>
                                    <li><a href="#"><span>Press</span></a></li>
                                    <li><a href="#"><span>Accessibility</span></a></li>
                                    <li><a href="#"><span>Investor Relations</span></a></li>
                                    <li><a href="#"><span>Follow Us</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="#"><span>Help & Support</span></a></li>
                                    <li><a href="#"><span>Trust & Safety</span></a></li>
                                    <li><a href="#"><span>Selling on Skillpark</span></a></li>
                                    <li><a href="#"><span>Investments</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Resources</h3>
                                <ul>
                                    <li><a href="#"><span>Log In</span></a></li>
                                    <li><a href="#"><span>Customer Support</span></a></li>
                                    <li><a href="#"><span>Stories</span></a></li>
                                    <li><a href="#"><span>Business Resource</span></a></li>
                                    <li><a href="#"><span>Payroll Services</span></a></li>
                                    <li><a href="#"><span>Skillpark Reviews</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Browse</h3>
                                <ul>
                                    <li><a href="#"><span>Freelancers by Skills</span></a></li>
                                    <li><a href="#"><span>Freelancers in Pokhara</span></a></li>
                                    <li><a href="#"><span>Freelancers in Jhapa</span></a></li>
                                    <li><a href="#"><span>Freelancers in Dhangadi</span></a></li>
                                    <li><a href="#"><span>Jobs in Nepal</span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12" style="float: left">
                            <strong style="float: left">© 2020 <b>SKILLPARK.</b> All Rights Reserved.</strong>

                            <!-- Social Icons -->
                            <div class="footer-row" style="float: right">
                                <div class="footer-row-inner">
                                    <ul class="footer-social-links">
                                        <li>
                                            <a href="#" title="Facebook">
                                                <i class="icon-brand-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter">
                                                <i class="icon-brand-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Instagram">
                                                <i class="icon-brand-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Pinterest">
                                                <i class="icon-brand-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="LinkedIn">
                                                <i class="icon-brand-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/tippy.all.min.js"></script>
        <script src="js/simplebar.min.js"></script>
        <script src="js/bootstrap-slider.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/snackbar.js"></script>
        <script src="js/clipboard.min.js"></script>
        <script src="js/counterup.min.js"></script>
        <script src="js/magnific-popup.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>