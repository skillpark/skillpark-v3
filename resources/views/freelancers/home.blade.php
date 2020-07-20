@extends('layouts.freelancers.freelancermaster')

@section('content')

<div class="col-xl-9 col-lg-12 content-left-offset" style="padding: 0;margin-top:10px">

    <div class="row">
        <div class="col-md-12">
            <div class="intro-banner-search-form margin-top-0" style="border-radius: 0px;">
                <!-- Search Field -->
                <div class="intro-search-field" style="padding: 0px;">
                    <input id="intro-keywords" type="text" placeholder="Search Here.. (e.g. laravel web application)">
                </div>

                <!-- Button -->
                <div class="intro-search-button" style="margin-top: 0px;">
                    <button style="border-radius:0px" class="button ripple-effect" onclick="window.location.href=''">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tasks Container -->
    <div class="tasks-list-container compact-list margin-top-20 margin-bottom-20">

        <!-- Task -->

        <div class="notify-box margin-top-15">
            <div class="switch-container">
                <label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
            </div>

            <div class="sort-by">
                <span>Sort by:</span>
                <select class="selectpicker hide-tick">
                    <option>Relevance</option>
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Random</option>
                </select>
            </div>
        </div>

        <!-- Task -->

        <a class="task-listing" href=" {{ url('task')}}">
            <!-- Job Listing Details -->
            <div class="task-listing-details">

                <!-- Details -->
                <div class="task-listing-description">
                    <h3 class="task-listing-title">2000 Words English to German</h3>
                    <span class="bookmark-icon"></span>
                    <ul class="task-icons">
                        <li><i class="icon-material-outline-location-off"></i> Online Job</li>
                        <li><i class="icon-material-outline-access-time"></i> 5 minutes ago</li>
                    </ul>
                    <p class="task-listing-text">Bring to the table win-win strategies to ensure domination and user
                        generated content in real-time will have multiple touchpoints.</p>
                    <div class="task-tags">
                        <span>copywriting</span>
                        <span>translating</span>
                        <span>editing</span>
                    </div>
                </div>
            </div>
            <div class="task-listing-bid">
                <div class="task-listing-bid-inner">
                    <div class="task-offers">
                        <strong>$75</strong>
                        <span>Fixed Price</span>
                    </div>
                    <span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-gavel"></i></span>
                </div>
            </div>
        </a>


        <!-- Task -->
        <a class="task-listing" href=" {{ url('task')}}">
            <!-- Job Listing Details -->
            <div class="task-listing-details">

                <!-- Details -->
                <div class="task-listing-description">
                    <h3 class="task-listing-title">WordPress Theme Installation</h3>
                    <span class="bookmark-icon"></span>
                    <ul class="task-icons">
                        <li><i class="icon-material-outline-location-off"></i> Online Job</li>
                        <li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
                    </ul>
                    <p class="task-listing-text">Completely synergize resource taxing relationships via premier niche
                        markets. Professionally cultivate customer service with robust ideas.</p>
                    <div class="task-tags">
                        <span>WordPress</span>
                        <span>Theme Installation</span>
                    </div>
                </div>

            </div>
            <div class="task-listing-bid">
                <div class="task-listing-bid-inner">
                    <div class="task-offers">
                        <strong>$75</strong>
                        <span>Fixed Price</span>
                    </div>
                    <span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-gavel"></i></span>
                </div>
            </div>
        </a>


        <!-- Task -->
        <a class="task-listing" href=" {{ url('task')}}">
            <!-- Job Listing Details -->
            <div class="task-listing-details">

                <!-- Details -->
                <div class="task-listing-description">
                    <h3 class="task-listing-title">PHP Core Website Fixes</h3>
                    <span class="bookmark-icon"></span>
                    <ul class="task-icons">
                        <li><i class="icon-material-outline-location-off"></i> Online Job</li>
                        <li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
                    </ul>
                    <p class="task-listing-text">Objectively innovate empowered manufactured products whereas parallel
                        platforms. Extensible testing procedures for reliable supply.</p>
                    <div class="task-tags">
                        <span>PHP</span>
                        <span>MySQL Administration</span>
                        <span>API Development</span>
                    </div>
                </div>

            </div>
            <div class="task-listing-bid">
                <div class="task-listing-bid-inner">
                    <div class="task-offers">
                        <strong>$75</strong>
                        <span>Fixed Price</span>
                    </div>
                    <span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-gavel"></i></span>
                </div>
            </div>
        </a>

    </div>

    <a href="#" style="line-height:20px" class="button ripple-effect button-sliding-icon">Load More Jobs <i class="icon-feather-arrow-down"></i></a>
</div>

<!-- Footer -->
<div class="dashboard-footer-spacer"></div>
<div class="small-footer margin-top-15">
    <div class="small-footer-copyrights">
        © 2020 <strong>SKILLPARK Inc.</strong>. All Rights Reserved.
    </div>
    <ul class="footer-social-links">
        <li>
            <a href="#" title="Facebook" data-tippy-placement="top">
                <i class="icon-brand-facebook-f"></i>
            </a>
        </li>
        <li>
            <a href="#" title="Twitter" data-tippy-placement="top">
                <i class="icon-brand-twitter"></i>
            </a>
        </li>
        <li>
            <a href="#" title="Google Plus" data-tippy-placement="top">
                <i class="icon-brand-google-plus-g"></i>
            </a>
        </li>
        <li>
            <a href="#" title="LinkedIn" data-tippy-placement="top">
                <i class="icon-brand-linkedin-in"></i>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<!-- Footer / End -->


<script>
    document.title = '{{ Auth::user()->name }} | Home';
</script>
@endsection