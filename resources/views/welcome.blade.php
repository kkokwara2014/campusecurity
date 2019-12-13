{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}


	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('bootstrap_assets/img/fav.png')}}">
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
				  				<li><a href="tel:+23906-856-2247"><span>+23906-856-2247</span> <span class="lnr lnr-phone-handset"></span></a></li>
				  				<li><a href="#">Login</a></li>
				  				<li><a href="#">Register</a></li>
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="{{asset('bootstrap_assets/img/logo.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{route('index')}}">Home</a></li>
				          {{-- <li><a href="about.html">About Us</a></li>
				          <li><a href="service.html">Service</a></li>
				          <li><a href="team.html">Team</a></li>
				          <li><a href="price.html">Price</a></li>
				          <li><a href="blog-home.html">Blog</a></li>	
				          <li><a href="contact.html">Contact</a></li>	
				          <li class="menu-has-children"><a href="">Pages</a> --}}
				            {{-- <ul>
				              <li><a href="blog-single.html">blog Single</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul> --}}
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-9">
							{{-- <h6 class="text-white">Openning on 21st February, 2018</h6> --}}
							<h1 class="text-white">
								Offering Security in Campus				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
							</p>
							<a href="#" class="primary-btn text-uppercase">Report Threat</a>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Offered Services</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('bootstrap_assets/img/s1.jpg')}}" alt="">
								</div>
								<div class="detail">
									<a href="#"><h4>Basic & Common Repairs</h4></a>
									<p>
										Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.									
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('bootstrap_assets/img/s2.jpg')}}" alt="">
								</div>
								<div class="detail">
									<a href="#"><h4>Brake Repairs & Services</h4></a>
									<p>
										Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.									
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('bootstrap_assets/img/s3.jpg')}}" alt="">
								</div>
								<div class="detail">
									<a href="#"><h4>Preventive Maintenance</h4></a>
									<p>
										Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.									
									</p>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End service Area -->	


			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="feature">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Some Features that Made us Unique</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->				

							


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; campussecurity <script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						{{-- <div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
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
								</div>
							</div>
						</div>						 --}}
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									{{-- <a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a> --}}
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="{{asset('bootstrap_assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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




