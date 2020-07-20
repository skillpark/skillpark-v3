@extends('layouts.clients.clientmaster')

@section('content')

<!-- Full Page Content -->
<div class="full-page-content-container" data-simplebar>
    <div class="full-page-content-inner">

        <div class="intro-banner-search-form margin-top-90"
            style="background-color: transparent;width:102.5%;box-shadow:none">
            <!-- Search Field -->
            <div class="intro-search-field with-label" style="padding:0">

                <input id="intro-keywords" style="height:50px; border-radius:0px;background:whitesmoke" type="text"
                    placeholder=" Search Freelancers Here">
            </div>

            <!-- Button -->
            <div class="intro-search-button">
                <button class="button ripple-effect" style="right: 12px; border-radius:0px;height:50px"
                    onclick="window.location.href='#'">Search</button>
            </div>
        </div>

        <!-- Freelancers List Container -->
        <div class="freelancers-container freelancers-grid-layout margin-top-5">

            <!--Freelancer -->
            <div class="freelancer">

                <!-- Overview -->
                <div class="freelancer-overview">
                    <div class="freelancer-overview-inner">

                        <!-- Bookmark Icon -->
                        <span class="bookmark-icon"></span>

                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <div class="verified-badge"></div>
                            <a href=""><img src="/images/user-avatar-placeholder.jpg" alt=""></a>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4><a href="">Divesh Thapa <img class="flag" src="/images/flags/gb.svg" alt=""
                                        title="United Kingdom" data-tippy-placement="top"></a></h4>
                            <span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="freelancer-details">
                    <div class="freelancer-details-list">
                        <ul>
                            <li>Location <strong><i class="icon-material-outline-location-on"></i> Kathmandu</strong>
                            </li>
                            <li>Rate <strong>Rs. 600 / hr</strong></li>
                            <li>Job Success <strong>95%</strong></li>
                        </ul>
                    </div>
                    <a href="" class="button button-sliding-icon ripple-effect">View Profile <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>
            <!-- Freelancer / End -->

            <!--Freelancer -->
            <div class="freelancer">

                <!-- Overview -->
                <div class="freelancer-overview">
                    <div class="freelancer-overview-inner">

                        <!-- Bookmark Icon -->
                        <span class="bookmark-icon"></span>

                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <div class="verified-badge"></div>
                            <a href=""><img src="/images/user-avatar-placeholder.jpg" alt=""></a>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4><a href="#">Nitika Bhatta <img class="flag" src="/images/flags/de.svg" alt=""
                                        title="Germany" data-tippy-placement="top"></a></h4>
                            <span>iOS Expert + Node Dev</span>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="freelancer-details">
                    <div class="freelancer-details-list">
                        <ul>
                            <li>Location <strong><i class="icon-material-outline-location-on"></i> Pokhara</strong></li>
                            <li>Rate <strong>Rs. 400 / hr</strong></li>
                            <li>Job Success <strong>88%</strong></li>
                        </ul>
                    </div>
                    <a href="" class="button button-sliding-icon ripple-effect">View Profile <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>
            <!-- Freelancer / End -->

            <!--Freelancer -->
            <div class="freelancer">

                <!-- Overview -->
                <div class="freelancer-overview">
                    <div class="freelancer-overview-inner">
                        <!-- Bookmark Icon -->
                        <span class="bookmark-icon"></span>

                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <a href=""><img src="/images/user-avatar-placeholder.jpg" alt=""></a>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4><a href="#">Sushant Poudel <img class="flag" src="/images/flags/pl.svg" alt=""
                                        title="Poland" data-tippy-placement="top"></a></h4>
                            <span>Front-End Developer</span>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="freelancer-details">
                    <div class="freelancer-details-list">
                        <ul>
                            <li>Location <strong><i class="icon-material-outline-location-on"></i> Dhangadi</strong>
                            </li>
                            <li>Rate <strong>Rs. 500 / hr</strong></li>
                            <li>Job Success <strong>100%</strong></li>
                        </ul>
                    </div>
                    <a href="" class="button button-sliding-icon ripple-effect">View Profile <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>
            <!-- Freelancer / End -->

            <!--Freelancer -->
            <div class="freelancer">

                <!-- Overview -->
                <div class="freelancer-overview">
                    <div class="freelancer-overview-inner">
                        <!-- Bookmark Icon -->
                        <span class="bookmark-icon"></span>

                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <div class="verified-badge"></div>
                            <a href=""><img src="/images/user-avatar-placeholder.jpg" alt=""></a>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4><a href="#">Aanchal Sharma <img class="flag" src="/images/flags/au.svg" alt=""
                                        title="Australia" data-tippy-placement="top"></a></h4>
                            <span>Magento Certified Developer</span>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="freelancer-details">
                    <div class="freelancer-details-list">
                        <ul>
                            <li>Location <strong><i class="icon-material-outline-location-on"></i> Rautahat</strong>
                            </li>
                            <li>Rate <strong>Rs. 700 / hr</strong></li>
                            <li>Job Success <strong>100%</strong></li>
                        </ul>
                    </div>
                    <a href="" class="button button-sliding-icon ripple-effect">View Profile <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>
            <!-- Freelancer / End -->

            <!--Freelancer -->
            <div class="freelancer">

                <!-- Overview -->
                <div class="freelancer-overview">
                    <div class="freelancer-overview-inner">
                        <!-- Bookmark Icon -->
                        <span class="bookmark-icon"></span>

                        <!-- Avatar -->
                        <div class="freelancer-avatar">
                            <a href=""><img src="images/user-avatar-placeholder.jpg" alt=""></a>
                        </div>

                        <!-- Name -->
                        <div class="freelancer-name">
                            <h4><a href="#">Krishna <img class="flag" src="images/flags/fr.svg" alt="" title="France"
                                        data-tippy-placement="top"></a></h4>
                            <span>WordPress Expert</span>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="freelancer-details">
                    <div class="freelancer-details-list">
                        <ul>
                            <li>Location <strong><i class="icon-material-outline-location-on"></i> Jhapa</strong></li>
                            <li>Rate <strong>Rs. 500 / hr</strong></li>
                            <li>Job Success <strong>100%</strong></li>
                        </ul>
                    </div>
                    <a href="" class="button button-sliding-icon ripple-effect">View Profile <i
                            class="icon-material-outline-arrow-right-alt"></i></a>
                </div>
            </div>
            <!-- Freelancer / End -->

        </div>
        <!-- Freelancers Container / End -->

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="pagination-container margin-top-20 margin-bottom-20">
            <nav class="pagination">
                <ul>
                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i
                                class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                    <li><a href="#" class="ripple-effect">1</a></li>
                    <li><a href="#" class="ripple-effect current-page">2</a></li>
                    <li><a href="#" class="ripple-effect">3</a></li>
                    <li><a href="#" class="ripple-effect">4</a></li>
                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i
                                class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
        <!-- Pagination / End -->

        @endsection