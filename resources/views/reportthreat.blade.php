<!DOCTYPE html>
<html lang="zxx" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        {{-- <link rel="shortcut icon" href="img/fav.png"> --}}
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Campus Security</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/main.css')}}">
    </head>

    <body>

        <header id="header" id="home">
            <div class="container header-top">
                <div class="row">
                    <div class="col-6 top-head-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-6 top-head-right">
                        <ul>
                            <li><a href="tel:+23906-856-2247"><span>+23906-856-2247</span> <span
                                        class="lnr lnr-phone-handset"></span></a></li>
                            @if (auth()->check())
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </li>

                            @else
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @endif

                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="{{route('login')}}"><img src="{{asset('bootstrap_assets/img/logo.png')}}" alt=""
                                title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="{{route('login')}}">Home</a></li>


                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Report Threat
                        </h1>
                        <p class="text-white link-nav"><a href="{{route('login')}}">Home </a> <span
                                class="lnr lnr-arrow-right"></span> <a href="#"> Report Threat</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    {{-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> --}}
                    {{-- <div class="col-lg-4 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>Dhaka, Bangladesh</h5>
                                <p>56/8, West Panthapath</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>00 (880) 9865 562</h5>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <h5>support@codethemes.com</h5>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-8">
                        {{-- for messages --}}
                        @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        <form class="form-area" action="{{route('reportthreat.store')}}" method="post" class="contact-form text-right">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 form-group">

                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                    <input name="title" placeholder="Enter Title" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Title'"
                                        class="common-input mb-20 form-control" required="" type="text">
                                    <div class="mt-20 alert-msg" style="text-align: left;"></div>

                                    <input name="crimescene" placeholder="Enter Crime Scene"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Crime Scene'"
                                        class="common-input mb-20 form-control" required="" type="text">
                                    <div class="mt-20 alert-msg" style="text-align: left;"></div>

                                    <textarea class="common-textarea form-control" name="reportbody"
                                        placeholder="Messege" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Messege'" required=""></textarea>

                                    <button class="primary-btn mt-20 text-white">Send
                                        Report</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact-page Area -->

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolore magna aliqua.
                            </p>
                            <p class="footer-text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            {{-- <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>

                                    <div class="info"></div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="{{asset('boostrap_assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="{{asset('bootstrap_assets/js/vendor/bootstrap.min.js')}}"></script>
        {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> --}}
        <script src="{{asset('bootstrap_assets/js/easing.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/hoverIntent.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/superfish.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/parallax.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/mail-script.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/main.js')}}"></script>
    </body>

</html>