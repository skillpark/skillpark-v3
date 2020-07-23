@extends('layouts.freelancers.freelancermaster')

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
                            <input class="search" autocomplete="off" tabindex="0"><span class="sizer" ></span>
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
                            <span class="sizer" ></span>
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
                                <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                                <div class="item" data-value="it"><i class="it flag"></i>Italy</div>
                                <div class="item" data-value="jm"><i class="jm flag"></i>Jamaica</div>
                                <div class="item" data-value="jp"><i class="jp flag"></i>Japan</div>
                                <div class="item" data-value="jo"><i class="jo flag"></i>Jordan</div>
                                <div class="item" data-value="kz"><i class="kz flag"></i>Kazakhstan</div>
                                <div class="item" data-value="ke"><i class="ke flag"></i>Kenya</div>
                                <div class="item" data-value="ki"><i class="ki flag"></i>Kiribati</div>
                                <div class="item" data-value="kw"><i class="kw flag"></i>Kuwait</div>
                                <div class="item" data-value="kg"><i class="kg flag"></i>Kyrgyzstan</div>
                                <div class="item" data-value="la"><i class="la flag"></i>Laos</div>

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
                                    <span class="nav-link">Results 170</span>
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
                                            <div class="item" data-value="0">Relevance</div>
                                            <div class="item" data-value="1">New</div>
                                            <div class="item" data-value="2">Old</div>
                                            <div class="item" data-value="3">Last 15 Days</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid-list">
                                    <button class="gl-btn" id="grid"><i class="fas fa-th-large"></i></button>
                                    <button class="gl-btn" id="list"><i class="fas fa-th-list"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="prjoects-content">
                        <div class="row  view-group" id="products">
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-1.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>John Doe</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$1k - $4.5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need Travel Wordpress Theme</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">UX</a>
                                            <a href="#">UI</a>
                                            <a href="#">Photoshop</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-2.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Johnson Smith</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$500 - $2.5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need Real Estate Listing Html Template</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Php</a>
                                            <a href="#">Sql</a>
                                            <a href="#">Javascript</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-7.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Joy Smith</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Nepal</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$800 - $3.5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need a Admin Dashboard</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Html</a>
                                            <a href="#">Css</a>
                                            <a href="#">Wordpress</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-4.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Joy Smith</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$800 - $3.5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need Food Delivery Androd App</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Android</a>
                                            <a href="#">Java</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-5.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Jassica William</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$1k - $4.5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need Travel Wordpress Theme</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Delivery</a>
                                            <a href="#">Local</a>
                                            <a href="#">Graduation</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-6.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Gambolthemes</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="project-cost">$1.2k - $5k</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>I Need Hotel Booking Wordpress Theme</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Html</a>
                                            <a href="#">Css</a>
                                            <a href="#">Boostrap</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
                                            <li><a href="project_single_view.html" class="link-j1" title="View Job">View Project</a></li>
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