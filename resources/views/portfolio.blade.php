@extends('layouts.main')
@section('content')
    <div class="main-wrapper">
        <div role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container">
            @section('content')
            </div>
            </div>
            </div>
        <div class="section first white">
            <div class=" p-b-60">
                <div class="section grey p-t-20  p-b-20 m-b-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>
                                    Portfolio</h2>
                            </div>
                            <div class="col-md-6 p-t-20 xs-no-padding xs-p-l-20">
                                <div class="portfolio-filter">
                                    <ul id="portfolio-nav">
                                        <li class="current"><a href="#" data-filter="*">All</a></li>
                                        <li><a data-filter=".web" href="#">Web design</a></li>
                                        <li><a data-filter=".logo-design" href="#">Logo</a></li>
                                        <li><a data-filter=".branding" href="#">Branding</a></li>
                                        <li><a data-filter=".video" href="#">Video</a></li>
                                        <li><a data-filter=".photo" href="#">Photography</a></li>
                                    </ul>
                                    <!--END PORTFOLIO-NAV-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="container">
                    <div class="portfolio-grid portfolioContainer ">
                        <ul id="thumbs" class="col3">
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/1.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Web design</h3>
                                            <p class="project-description">
                                                One Pager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Web design</h4>
                                    <p>
                                        April 18</p>
                                </div>
                                <!--END ITEM-INFO-->
                                <div class="clearfix">
                                </div>
                            </li>
                            <li class="item branding">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/2.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <a href="#" class="overlay-link"></a>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Profile Card</h3>
                                            <p class="project-description">
                                                Creative</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Profile Card</h4>
                                    <p>
                                        April 20</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item video">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/3.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Mobile App</h3>
                                            <p class="project-description">
                                                Mobile app for charts</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Mobile App</h4>
                                    <p>
                                        April 21</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/4.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Business Card</h3>
                                            <p class="project-description">
                                                Printing Project</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Business Card</h4>
                                    <p>
                                        April 22</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item photo">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/5.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Website design</h3>
                                            <p class="project-description">
                                                Creative Responsive Website</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Website design</h4>
                                    <p>
                                        April 25</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item branding">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/6.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Branding/Logo Design</h3>
                                            <p class="project-description">
                                                Company rebranding</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Branding/Logo Design</h4>
                                    <p>
                                        May 04</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item logo">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/7.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Logo Design</h3>
                                            <p class="project-description">
                                                A Logo</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Logo Design</h4>
                                    <p>
                                        May 04</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item logo">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/8.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Logo Design</h3>
                                            <p class="project-description">
                                                Logo Design & Pallete</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Logo Design</h4>
                                    <p>
                                        July 16</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/9.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Dribbble Meetup</h3>
                                            <p class="project-description">
                                                Invitation Artwork</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Dribbble Meetup</h4>
                                    <p>
                                        July 22</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/10.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Freehand</h3>
                                            <p class="project-description">
                                                Creative</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Freehand</h4>
                                    <p>
                                        July 28</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/11.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Abstract 3D</h3>
                                            <p class="project-description">
                                                Abstract</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Abstract 3D</h4>
                                    <p>
                                        August 14</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="assets/img/gallery/12.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Analytical Website</h3>
                                            <p class="project-description">
                                                Responsive website</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Analytical Website</h4>
                                    <p>
                                        December 31</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section grey">
            <div class="container">
                <div class="p-t-60 p-b-50">
                    <div id="testomonials" class="owl-carousel row">
                        <div class="item">
                            <div class="col-md-6  col-md-offset-3 text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial_img1.png" alt="testimonal">
                                </div>
                                <div class="testimonial-user">
                                    <span>John Donga</span> Greepit.com
                                </div>
                                <h3 class="normal text-center">
                                    I have always received good service from the Frittt Templates. Timing and quality
                                    have always met my expectations and everything is communicated in a professional
                                    and timely manner.
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6   col-md-offset-3 text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial_img2.png" alt="testimonal">
                                </div>
                                <div class="testimonial-user">
                                    <span>John Donga</span> Frittt.com
                                </div>
                                <h3 class="normal text-center">
                                    We consider the Frittt Templates team a development partner who has proven to be
                                    creative in problem resolution, reliable in time commitments, and overall consistent
                                    in meeting our expectations.
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6   col-md-offset-3 text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial_img3.png" alt="testimonal">
                                </div>
                                <div class="testimonial-user">
                                    <span>John Donga</span> www.Frittt.com
                                </div>
                                <h3 class="semi-bold text-center">
                                    The work was above and beyond what I could have expected. Excellent service all
                                    the way around from start to finish. Keep up the GREAT work! Great job!
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- BEGIN CORE JS FRAMEWORK -->
    <script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE JS FRAMEWORK -->
    <!-- BEGIN JS PLUGIN -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/waypoints.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-isotope/jquery.isotope.js"></script>
    <!-- END JS PLUGIN -->
    <script type="text/javascript" src="assets/js/core.js"></script>

@endsection