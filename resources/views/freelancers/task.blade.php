@extends('layouts.freelancers.taskmaster')

@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/task-01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-page-header-inner">
                    <div class="left-side">
                        <div class="header-image"><img src="images/task-01.jpg" alt="Task Photo Goes Here"></div>
                        <div class="header-details">
                            <h3>Food Delivery App</h3>
                            <h5>About the Employer</h5>
                            <ul>
                                <li><a href=""><i class="icon-material-outline-business"></i> Bhoj Deals</a></li>
                                <li><img class="flag" src="images/flags/de.svg" alt=""> Kathmandu</li>
                                <li>
                                    <div class="verified-badge-with-title">Verified</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="salary-box">
                            <div class="salary-type">Project Budget</div>
                            <div class="salary-amount">Rs. 25000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">

        <!-- Content -->
        <div class="col-xl-6 col-lg-8 content-right-offset">

            <!-- Description -->
            <div class="single-page-section">
                <h3 class="margin-bottom-25">Project Description</h3>
                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches
                    to corporate strategy foster collaborative thinking to further the overall value proposition.
                    Organically grow the holistic world view of disruptive innovation via workplace diversity and
                    empowerment.</p>

                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day,
                    going forward, a new normal that has evolved from generation X is on the runway heading towards a
                    streamlined cloud solution. User generated content in real-time will have multiple touchpoints for
                    offshoring.</p>

                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override
                    the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the
                    information highway will close the loop on focusing solely on the bottom line.</p>
            </div>

            <!-- Atachments -->
            <div class="single-page-section">
                <h3>Attachments</h3>
                <div class="attachments-container">
                    <a href="#" class="attachment-box ripple-effect"><span>Project Brief</span><i>PDF</i></a>
                </div>
            </div>

            <!-- Skills -->
            <div class="single-page-section">
                <h3>Skills Required</h3>
                <div class="task-tags">
                    <span>iOS</span>
                    <span>Android</span>
                    <span>mobile apps</span>
                    <span>design</span>
                </div>
            </div>
            <div class="clearfix"></div>


        </div>


        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4">
            <div class="sidebar-container">

                <div class="sidebar-widget">
                    <div class="bidding-widget">
                        <div class="bidding-headline">
                            <h3>Bid on this job!</h3>
                        </div>
                        <div class="bidding-inner">

                            <!-- Headline -->
                            <span class="bidding-detail margin-top-0">Set your <strong>delivery time</strong></span>

                            <!-- Fields -->
                            <div class="bidding-fields">
                                <div class="bidding-field">
                                    <!-- Quantity Buttons -->
                                    <div class="qtyButtons">
                                        <div class="qtyDec"></div>
                                        <input type="text" name="qtyInput" value="1">
                                        <div class="qtyInc"></div>
                                    </div>
                                </div>
                                <div class="bidding-field">
                                    <select class="selectpicker default">
                                        <option selected>Days</option>
                                        <option>Hours</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Button -->
                            <button id="snackbar-place-bid"
                                class="button ripple-effect move-on-hover full-width margin-top-30"><span>Place a
                                    Bid</span></button>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="sidebar-widget">
                    <h3>Bookmark or Share</h3>

                    <!-- Bookmark Button -->
                    <button class="bookmark-button margin-bottom-25">
                        <span class="bookmark-icon"></span>
                        <span class="bookmark-text">Bookmark</span>
                        <span class="bookmarked-text">Bookmarked</span>
                    </button>

                    <!-- Copy URL -->
                    <div class="copy-url">
                        <input id="copy-url" type="text" value="" class="with-border">
                        <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url"
                            title="Copy to Clipboard" data-tippy-placement="top"><i
                                class="icon-material-outline-file-copy"></i></button>
                    </div>

                    <!-- Share Buttons -->
                    <div class="share-buttons margin-top-25">
                        <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                        <div class="share-buttons-content">
                            <span>Interesting? <strong>Share It!</strong></span>
                            <ul class="share-buttons-icons">
                                <li><a href="#" data-button-color="#3b5998" title="Share on Facebook"
                                        data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter"
                                        data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus"
                                        data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
                                <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn"
                                        data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Spacer -->
<div class="margin-top-15"></div>

@endsection