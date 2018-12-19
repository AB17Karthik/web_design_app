@extends('layouts.main')

    <div class="main-wrapper">
        <div role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container">
            @section('content')
            </div>
            </div>
            </div>
        <div class="section grey text-center m-t-60 p-t-40 p-b-40" id="banner-footer">
            <h2 class="normal m-b-10">
                Pricing and Plans</h2>
            <p>
                Simple and clear, no hidden fees</p>
        </div>
        <div class="section white">
            <div class="container p-t-50 p-b-50">
                <div class="p-t-10">
                    <div class="pricing t-mgr40">
                        <div class="col-sm-4">
                            <div class="plan active">
                                <h3>
                                    Standard</h3>
                                <h4>
                                    <span class="amount"><span>$</span>29<span>/mo</span></span></h4>
                                <div>
                                    <ul>
                                        <li>250GB Disk Space</li>
                                        <li>10 Email Accounts</li>
                                        <li>Unlimited Bandwidth</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                </div>
                                <div class="select">
                                    <div>
                                        <a class="btn btn-info" href="#" target="_self">Sign me up <i class="arrow_right">→</i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <h3>
                                    Premium</h3>
                                <h4>
                                    <span class="amount"><span>$</span>49<span>/mo</span></span></h4>
                                <div>
                                    <ul>
                                        <li>250GB Disk Space</li>
                                        <li>20 Email Accounts</li>
                                        <li>Unlimited Bandwidth</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                </div>
                                <div class="select">
                                    <div>
                                        <a class="btn btn-info" href="#" target="_self">Sign me up <i class="arrow_right">→</i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <h3>
                                    Deluxe</h3>
                                <h4>
                                    <span class="amount"><span>$</span>79<span>/mo</span></span></h4>
                                <div>
                                    <ul>
                                        <li>300GB Disk Space</li>
                                        <li>40 Email Accounts</li>
                                        <li>Unlimited Bandwidth</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                </div>
                                <div class="select">
                                    <div>
                                        <a class="btn btn-info" href="#" target="_self">Sign me up <i class="arrow_right">→</i></a></div>
                                </div>
                            </div>
                        </div>
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
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/waypoints.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <!-- END JS PLUGIN -->
    <script type="text/javascript" src="assets/js/core.js"></script>
@endsection