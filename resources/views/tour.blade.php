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
                We are a full service digital agency with smart thinking & smart work!</h2>
            <p>
                No matter where you go , our product is made to fit any screen.. mobile , tablet
                and desktop</p>
            <button type="button" class="btn btn-info btn-cons m-t-10">
                Learn More</button>
        </div>
        <div id="cbp-so-scroller" class="cbp-so-scroller section white ha-waypoint green-icons"
            data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img src="assets/img/Retina.png" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-arrows-alt fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">Web</span> Design</h1>
                            <p>
                                Intriguing web designs and fascinating results, makes you happy and earns us a loyal
                                customer – Always there, looking after you!
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="cbp-so-section">
                <article class="cbp-so-side cbp-so-side-left text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-40 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-heart-o fa-4x"></i>
                            <h1 class="m-b-20">
                                Creative <span class="semi-bold">Template</span></h1>
                            <p>
                                We work to deliver results, celebrate entrepreneurship, stand for justice, and believe
                                in the progress of common good.</p>
                            <p>
                                We push. We make you nervous. We get results. Let's get to work. Whenever you need,
                                you will find always there, looking after you!
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="assets/img/Stressfree.png" alt="img01">
                </figure>
            </section>
            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img src="assets/img/Front.png" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-thumbs-o-up fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">Bootstrap 3</span> Based</h1>
                            <p>
                                This free template is based on the popular Twitter Bootstrap Frameowrk. You can
                                easily customize if you have little Bootstrap 3 knowledge.</p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="cbp-so-section">
                <article class="cbp-so-side cbp-so-side-left text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-check-circle-o fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">Perfect Template</span> for All</h1>
                            <p>
                                As your business flourishes, we grow as a business and so our team makes sure that
                                your growth is supported and we go hand in hand. Every project begins with a round
                                of research and discovery. We dig through the values, strategy, and organizational
                                culture that make you unique.
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="assets/img/condensed.png" alt="img01">
                </figure>
            </section>
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
    <script src="assets/plugins/modernizr.custom.js"></script>
    <script src="assets/plugins/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/plugins/onescroll/js/classie.js"></script>
    <script src="assets/plugins/onescroll/js/cbpScroller.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <!-- END JS PLUGIN -->
    <script>
        new cbpScroller(document.getElementById('cbp-so-scroller'));
    </script>
    <script type="text/javascript" src="assets/js/core.js"></script>
@endsection