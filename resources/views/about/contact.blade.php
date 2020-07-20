<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <title>{{ config('app.name', 'SkillPark | Any Job Any Time - Contact') }}</title>
    <link rel="icon" type="image/png" href="images/titlelogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">

</head>

<body>

    <div id="wrapper" class="wrapper-with-transparent-header">
        <header id="header-container" class="fullwidth transparent-header">

            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <div id="logo" style="border: none">
                            <a href="{{ url('/')}}"><img src="images/logo2.png" data-sticky-logo="images/logo.png" data-transparent-logo="images/logo2.png" alt=""></a>
                        </div>
                        <nav id="navigation" style="float: right; right:200px">
                            <ul id="responsive">
                                @guest
                                <li><a style="color:#666" href="{{ url('creators') }}">CREATORS</a>
                                </li>

                                <li>
                                    <a style="color:#666" href="{{ route('login') }}" class="log-in-button"> <span>{{ __('LOGIN') }}</span></a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                    <a style="color:#666" href="{{ route('register') }}" class="log-in-button"> <span><b>{{ __('SIGN UP') }}</b></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="right-side">
                        <div class="header-widget" style="border: none;">
                            @endif
                            <a href="{{ url('post-project') }}" style="top: 20%;background-color:#0bb744;color:white;padding:7px" class="button gray ripple-effect button-sliding-icon">POST A PROJECT <i class="icon-line-awesome-plus"></i></a>
                        </div>
                    </div>
                    @else
                    <div class="right-side">
                        <div class="header-widget" style="border: none;">

                            <a href="{{ url('home') }}" style="top: 20%;background-color:#0bb744;color:white;margin-right:-100px" class="button gray ripple-effect">Dashboard </a>
                        </div>
                    </div>
                    @endguest

                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger" style="top:-65px; right:-13px">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </span>

                    </nav>
        </header>
        <div class="clearfix"></div>

        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="contact-location-info margin-bottom-50">
                        <div class="contact-address">
                            <ul>
                                <li class="contact-address-headline">Our Office</li>
                                <li>Balkumari Road, Lalitpur 44700</li>
                                <li>Phone (986) 048-9494</li>
                                <li><a href="mailto:skillparknepal@gmail.com">skillparknepal@gmail.com</a></li>
                                <li>
                                    <div class="freelancer-socials">
                                        <ul>
                                            <li><a href="https://instagram.com/skillpark" target="_blank"><i class="icon-brand-instagram"></i></a></li>
                                            <li><a href="https://twitter.com/skillpark" target="_blank"><i class="icon-brand-twitter"></i></a></li>
                                            <li><a href="https://pinterest.comskillpark" target="_blank"><i class="icon-brand-pinterest"></i></a></li>
                                            <li><a href="https://github.com/skillpark" target="_blank"><i class="icon-brand-github"></i></a></li>
                                            <li><a href="https://linkedin.com/skillpark" target="_blank"><i class="icon-brand-linkedin"></i></a></li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div id="single-job-map-container">
                            <div id="singleListingMap" data-latitude="27.664868" data-longitude="85.3375516" data-map-icon="im im-icon-Hamburger"></div>
                            <a href="#" id="streetView">Street View</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">

                    <section id="contact" class="margin-bottom-60">
                        <h3 class="headline margin-top-15 margin-bottom-35">Any questions? Feel free to contact us!</h3>

                        <form method="post" name="contactform" id="contactform" autocomplete="on">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-with-icon-left">
                                        <input class="with-border" name="name" type="text" id="name" placeholder="Your Name" required="required" />
                                        <i class="icon-material-outline-account-circle"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-with-icon-left">
                                        <input class="with-border" name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                                        <i class="icon-material-outline-email"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="input-with-icon-left">
                                <input class="with-border" name="subject" type="text" id="subject" placeholder="Subject" required="required" />
                                <i class="icon-material-outline-assignment"></i>
                            </div>

                            <div>
                                <textarea class="with-border" name="comments" cols="40" rows="5" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
                            </div>

                            <input type="submit" class="submit button margin-top-15" id="submit" value="Submit Message" />

                        </form>
                    </section>

                </div>

            </div>
        </div>
        <!-- Container / End -->

        <!-- Footer
================================================== -->
        <div id="footer">
            <!-- Footer Copyrights -->
            <div class="footer-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            © 2020 <strong>SKILLPARK</strong>. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyrights / End -->
        </div>
        <!-- Footer / End -->
    </div>
    <!-- Wrapper / End -->

    <!-- Scripts
================================================== -->
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

    <!-- Google API & Maps -->
    <!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
    <script src="js/infobox.min.js"></script>
    <script src="js/markerclusterer.js"></script>
    <script src="js/maps.js"></script>

</body>

</html>