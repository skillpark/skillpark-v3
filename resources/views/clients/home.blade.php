@extends('layouts.clients.clientmaster')

@section('content')

<!-- Body Start -->
<main class="browse-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="browser-job-filters">
                    <div class="filter-heading">
                        <div class="fh-left">
                            Filters
                        </div>
                        <div class="fh-right">
                            <a href="#">Clear All Filters</a>
                        </div>
                    </div>
                    <div class="fltr-group">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Skills</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui fluid multiple search selection dropdown skills-search">
                            <input name="tags" type="hidden" value="">
                            <i class="dropdown icon"></i>
                            <input class="search" autocomplete="off" tabindex="0"><span class="sizer"></span>
                            <div class="default text">Skills</div>
                            <div class="menu transition hidden" tabindex="-1">
                                <div class="item selected" data-value="angular">Angular</div>
                                <div class="item" data-value="css">CSS</div>
                                <div class="item" data-value="design">Graphic Design</div>
                                <div class="item" data-value="ember">Ember</div>
                                <div class="item" data-value="html">HTML</div>
                                <div class="item" data-value="ia">Information Architecture</div>
                                <div class="item" data-value="javascript">Javascript</div>
                                <div class="item" data-value="mech">Mechanical Engineering</div>
                                <div class="item" data-value="meteor">Meteor</div>
                                <div class="item" data-value="node">NodeJS</div>
                                <div class="item" data-value="plumbing">Plumbing</div>
                                <div class="item" data-value="python">Python</div>
                                <div class="item" data-value="rails">Rails</div>
                                <div class="item" data-value="react">React</div>
                                <div class="item" data-value="repair">Kitchen Repair</div>
                                <div class="item" data-value="ruby">Ruby</div>
                                <div class="item" data-value="ui">UI Design</div>
                                <div class="item" data-value="ux">User Experience</div>
                            </div>
                        </div>
                    </div>
                    <div class="fltr-group">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Availability</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui form">
                            <div class="grouped fields">
                                <div class="field fltr-radio">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2" checked="checked">
                                        <label>Hourly</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2">
                                        <label>Part Time</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="example2">
                                        <label class="lst-label">Full Time</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fltr-group">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Job Type</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui fluid search selection dropdown skills-search">
                            <input name="tags" type="hidden" value="">
                            <i class="dropdown icon"></i>
                            <input class="search" autocomplete="off" tabindex="0">
                            <span class="sizer"></span>
                            <div class="default text">Select a job</div>
                            <div class="menu transition hidden" tabindex="-1">
                                <div class="item selected" data-value="Job1">Job 01</div>
                                <div class="item" data-value="Job2">Job 02</div>
                                <div class="item" data-value="Job3">Job 03</div>
                                <div class="item" data-value="Job4">Job 04</div>
                                <div class="item" data-value="Job5">Job 05</div>
                                <div class="item" data-value="Job6">Job 06</div>
                                <div class="item" data-value="Job7">Job 07</div>
                                <div class="item" data-value="Job8">Job 08</div>
                                <div class="item" data-value="Job9">Job 09</div>
                                <div class="item" data-value="Job10">Job 10</div>
                                <div class="item" data-value="Job11">Job 11</div>
                                <div class="item" data-value="Job12">Job 12</div>
                                <div class="item" data-value="Job13">Job 13</div>
                                <div class="item" data-value="Job14">Job 14</div>
                                <div class="item" data-value="Job15">Job 15</div>
                            </div>
                        </div>
                    </div>
                    <div class="fltr-group">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Pay Rate <span>($)</span></h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="filter-dd">
                            <div class="rg-slider">
                                <input class="rn-slider slider-input" type="hidden" value="5,500" />
                            </div>
                            <div class="rg-limit">
                                <h4>5</h4>
                                <h4>5000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="fltr-group">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Experience Level</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui fluid search selection dropdown skills-search">
                            <input name="tags" type="hidden" value="">
                            <i class="dropdown icon"></i>
                            <input class="search" autocomplete="off" tabindex="0">
                            <span class="sizer"></span>
                            <div class="default text">Select Experience Level</div>
                            <div class="menu transition hidden" tabindex="-1">
                                <div class="item" data-value="level1">level 01</div>
                                <div class="item" data-value="level2">level 02</div>
                                <div class="item" data-value="level3">level 03</div>
                                <div class="item" data-value="level4">level 04</div>
                                <div class="item" data-value="level5">level 05</div>
                                <div class="item" data-value="level6">level 06</div>
                                <div class="item" data-value="level7">level 07</div>
                                <div class="item" data-value="level8">level 08</div>
                                <div class="item" data-value="level9">level 09</div>
                                <div class="item" data-value="level10">level 10</div>
                            </div>
                        </div>
                    </div>
                    <div class="fltr-group fltr-gend">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Location</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui fluid search selection dropdown skills-search">
                            <input type="hidden" name="country">
                            <div class="default text">Select Country</div>
                            <i class="dropdown icon"></i>
                            <div class="menu transition hidden" tabindex="-1">
                               
                                <div class="item" data-value="np"><i class="np flag"></i>Nepal</div>
                                <div class="item" data-value="tw"><i class="tw flag"></i>Taiwan</div>
                                <div class="item" data-value="tj"><i class="tj flag"></i>Tajikistan</div>
                                <div class="item" data-value="ae"><i class="ae flag"></i>United Arab Emirates</div>
                                <div class="item" data-value="us"><i class="us flag"></i>United States</div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-button">
                        <button class="flr-btn">Search Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 mainpage">
                <div class="main-tabs">
                    <div class="res-tabs">
                        <div class="mtab-left">
                            <ul class="browsr-project">
                                <li>
                                    <span class="nav-link">Search Results</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mtab-right">
                            <ul>
                                <li class="bp-block">
                                    <div class="ui selection dropdown skills-search sort-dropdown">
                                        <input name="gender" type="hidden" value="default">
                                        <i class="dropdown icon d-icon"></i>
                                        <div class="text">Sort By</div>
                                        <div class="menu">
                                            <div class="item" data-value="0">All</div>
                                            <div class="item" data-value="1">Top</div>
                                            <div class="item" data-value="2">Newest</div>
                                            <div class="item" data-value="3">Ranking</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="prjoects-content">
                        <div class="row">
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-1.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>John Doe</h4>
                                                </a>
                                                <span>UX Designer</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$50/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-2.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Albert Dua</h4>
                                                </a>
                                                <span>Wordpress Developer</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$50/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-3.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Rock William</h4>
                                                </a>
                                                <span>Php Developer</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$60/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-4.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Joy Smith</h4>
                                                </a>
                                                <span>Android Developer</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$60/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-5.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Sanaya Sharma</h4>
                                                </a>
                                                <span>Accountant manager</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$30/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="images/homepage/candidates/img-6.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Jass Singh</h4>
                                                </a>
                                                <span>Front End Developer</span>
                                                <div class="avialable">Available Full Time</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">$25/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="rtitle">Rating</div>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="right-location">
                                            <div class="text-left">
                                                <div class="rtitle">Location</div>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="main-p-pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    PREV
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">24</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    NEXT
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->

<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>
@endsection