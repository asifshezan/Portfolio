<!DOCTYPE html>
<html lang="en">
<head>
<title>Asif Portfolio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{asset('contents/website')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/skills_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/skills.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/services_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/services.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/experience.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/experiences_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/education_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/education.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/portfolio_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/portfolio.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/contact.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">Asif<span>.</span>CV</div>
			<div class="main_nav d-flex flex-row align-items-end justify-content-start">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="{{ request()->routeIs('website.about') ? 'active' : '' }}"><a href="{{ route('website.about')}}">About</a></li>
					<li class="{{ request()->routeIs('website.skill') ? 'active' : '' }}"><a href="{{ route('website.skill')}}">Skills</a></li>
					<li class="{{ request()->routeIs('website.service') ? 'active' : '' }}"><a href="{{ route('website.service')}}">Services</a></li>
					<li class="{{ request()->routeIs('website.experience') ? 'active' : '' }}"><a href="{{ route('website.experience')}}">Experience</a></li>
					<li class="{{ request()->routeIs('website.education') ? 'active' : '' }}"><a href="{{ route('website.education')}}">Education</a></li>
					<li class="{{ request()->routeIs('website.portfolio') ? 'active' : '' }}"><a href="{{ route('website.portfolio')}}">Portfolio</a></li>
					<li class="{{ request()->routeIs('website.contact') ? 'active' : '' }}"><a href="{{ route('website.contact')}}">Contact</a></li>
				</ul>
				<div class="header_button ml-auto">
					<a href="#">Available for freelance work</a>
					<div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
				</div>
			</div>
			<!-- Menu -->

		</div>
	</header>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
			<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
				<div>
					<div class="general_info_image">
						<div class="background_image" style="background-image:url({{asset('contents/website')}}/images/asif.JPG); margin-bottom:30px;"></div>
					</div>
				</div>
				<div class="general_info_content">
					<div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
						<div class="general_info_title">General Information</div>
						<ul class="general_info_list">
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_1.png" alt=""></div>
								<div class="general_info_text">Name: <span>Asif Ahamed</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center">
                                    <i class="fa fa-map-marker"></i>
                                </div>

								<div class="general_info_text">Location: <span>Purbachal Road, Uttar Badda.</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_2.png" alt=""></div>
								<div class="general_info_text">Date of Birth: <span>July 27, 1997</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_3.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:asifshezan7@gmail.com?subject=Job_Inquiry">asifshezan7@gmail.com</a></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_4.png" alt=""></div>
								<div class="general_info_text">+88 0151-6788837</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_5.png" alt=""></div>
								<div class="general_info_text"><a href="https://asifwebdev.com">https://asifwebdev.com</a></div>
							</li>
						</ul>

						<!-- Social -->
						<div class="social_container">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			@yield('content')


		</div>


	</div>
<div align='center'>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

</div>

<script src="{{asset('contents/website')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('contents/website')}}/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{asset('contents/website')}}/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/progressbar/progressbar.js"></script>
<script src="{{asset('contents/website')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="{{asset('contents/website')}}/plugins/easing/easing.js"></script>
<script src="{{asset('contents/website')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{asset('contents/website')}}/plugins/Isotope/fitcolumns.js"></script>
<script src="{{asset('contents/website')}}/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('contents/website')}}/js/custom.js"></script>
<script src="{{asset('contents/website')}}/js/skills.js"></script>
<script src="{{asset('contents/website')}}/js/experience.js"></script>
<script src="{{asset('contents/website')}}/js/services.js"></script>
<script src="{{asset('contents/website')}}/js/education.js"></script>
<script src="{{asset('contents/website')}}/js/portfolio.js"></script>
<script src="{{asset('contents/website')}}/js/contact.js"></script>
</body>
</html>
