@extends('layouts.master')

@section('content')
<style>
    a {
        color: inherit;
    }

    .p-category a img {
        width: 36px
    }

    @media only screen and (max-width: 976px) {

        .img-fluid,
        .popular {
            display: none;
        }
    }
</style>
<!-- Body Start -->
<main class="body-section">
    <!-- Begin Page Content -->
    <section class="py-5 homepage-search-block position-relative" style="background-color: #f0f2f5;">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-lg-6 mx-auto">
                    <div class="homepage-search-title">
                        <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold" style="font-size: 2rem;">Where
                            seeker meets the perfect and trusted freelancer talents</h1>
                        <h5 class="mb-5 text-shadow text-gray-700 font-weight-normal">Hire expert freelancers for your
                            projects any time.
                        </h5>
                    </div>
                    <div class="homepage-search-form">
                        <form class="form-noborder">
                            <div class="form-row">
                                <div class="col-lg-7 col-xl-9 col-sm-12 form-group">
                                    <input type="text" placeholder="Find Services..." class="form-control border-0 form-control-lg shadow-sm">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-lg btn-gradient shadow-sm">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="popular">
                        <span class="text-body-2">Popular</span>
                        <ul>
                            <li><a href="#" class="text-body-2">Web App</a></li>
                            <li><a href="#" class="text-body-2">Flutter Dev</a></li>
                            <li><a href="#" class="text-body-2">Logo design</a></li>
                            <li><a href="#" class="text-body-2">Articles &amp; Blog Posts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="images/banner.svg" alt='' />
                </div>
            </div>
        </div>
    </section>
    <!-- social 
			<ul class="trusted-by bg-white border-bottom">
				<li><img style="width: 80px;filter: grayscale(100%);" src="images/logo-carousel-01.png"></li>
				<li><img style="width: 80px;filter: grayscale(100%);" src="images/logo-carousel-02.png"></li>
				<li><img style="width: 80px;filter: grayscale(100%);" src="images/logo-carousel-03.png"></li>
				<li><img style="width: 80px;filter: grayscale(100%);" src="images/logo-carousel-04.png"></li>
				<li><img style="width: 80px;filter: grayscale(100%);" src="images/logo-carousel-05.png"></li>
			</ul>
			<!--       social -->

    <div class="we-offers">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>What We Offer</h2>
                        <span>Offering the Best Deal</span>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Searching the Best Job</h4>
                            <p>Find Jobs according to categories and work on what best qualifies your skills and
                                payments you deserve.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>More Quality Hires</h4>
                            <p>Thousands of Qualified Freelancers ready for your projects and business. Either find them
                                or let them bid.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Full Transparency</h4>
                            <p> A modern dynamic dashboard allows you to track your project's activity for you to always
                                stay updated.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Simplified Payment</h4>
                            <p>Using the national payment system, now the payments are faster and more secure. Contracts
                                are there to backup.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>Explore the Marketplace</h2>
                        <span>Find quality talent or agencies</span>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="job-categories mt-30">
                        <div class="row no-gutters">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-9.svg" alt="">
                                        <span>Sales &amp; Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-16.svg" alt="">
                                        <span>Web Development</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-17.svg" alt="">
                                        <span>Translation</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-7.svg" alt="">
                                        <span>Architecture Design</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-11.svg" alt="">
                                        <span>Financial Advices</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-13.svg" alt="">
                                        <span>Blogs Writing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-14.svg" alt="">
                                        <span>Legal Advices</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-15.svg" alt="">
                                        <span>IT &amp; Networking</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="find-lts-jobs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>Find the Latest Posts</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="lts-jobs-slider">
                        <div class="owl-carousel jobs-owl owl-theme">
                            <div class="item">
                                <div class="job-item">
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
                                            <div class="job-price">$599</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>UX Designer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">UX</a>
                                            <a href="#">UI</a>
                                            <a href="#">Photoshop</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
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
                                            <div class="job-price">$50/hr</div>
                                            <div class="job-fp job-prt">Part Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>PHP Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Php</a>
                                            <a href="#">Sql</a>
                                            <a href="#">Javascript</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/homepage/latest-jobs/img-3.jpg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Envato</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">$900</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>Wordpress Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Html</a>
                                            <a href="#">Css</a>
                                            <a href="#">Wordpress</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
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
                                            <div class="job-price">$500</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>Graphic Designer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Illistrator</a>
                                            <a href="#">Photoshop</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
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
                                            <div class="job-price">$300</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>Data Science &amp; Analytics</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Delivery</a>
                                            <a href="#">Local</a>
                                            <a href="#">Graduation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
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
                                            <div class="job-price">$60/hr</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>Front End Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Html</a>
                                            <a href="#">Css</a>
                                            <a href="#">Boostrap</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blogs and guides -->
    <div class="all-categories" style="padding: 0;">
        <!--       guides  -->
        <div class="guide-wrapper py-5">
            <div class="container">
                <h2>
                    Skillpark
                    Blogs
                    <a style="font-size: 14px;color:inherit" href="https://kasari678290104.wordpress.com/" target="_blank" class="float-right">See More guides <i class="fas fa-arrow-right"></i></a>
                </h2>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="images/guide-01.jpg">
                            <div class="content">
                                <h6>Create a Website</h6>
                                <p>Building a stunning website from A to Z</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="images/guide-02.jpg">
                            <div class="content">
                                <h6>Grow With Digital Marketing</h6>
                                <p>Promoting your business online</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="images/guide-03.jpg">
                            <div class="content">
                                <h6>Start Freelancing</h6>
                                <p>Differentiating yourself from the competition</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--       guides  -->
    </div>
    <!-- get started -->
    <div class="all-categories" style="padding: 0;">
        <div class="get-started">
            <div class="content">
                <h2>Hire experts or be hired. For any job, any time.</h2>
                <p>We've got you covered for all your business needs</p>
                @guest
                <a href="{{ route('register') }}" class="c-btn c-fill-color-btn">Get Started</a>
                @else
                <a href="{{ url('home') }}" class="c-btn c-fill-color-btn">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</main>
<!-- Body End -->


@endsection