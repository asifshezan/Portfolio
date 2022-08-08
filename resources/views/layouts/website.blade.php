<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('contents/website')}}/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{ asset('contents/website')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('contents/website')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="{{ asset('contents/website')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('contents/website')}}/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">Smith<span>.</span>CV</div>
			<div class="main_nav d-flex flex-row align-items-end justify-content-start">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="about.html">About</a></li>
					<li><a href="skills.html">Skills</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="experience.html">Experience</a></li>
					<li><a href="education.html">Education</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<div class="header_button ml-auto">
					<a href="#">Available for freelance work</a>
					<div class="d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('contents/website')}}/images/download.png" alt=""></div>
				</div>
			</div>
			<!-- Menu -->
	<div class="menu">
		<div class="menu_content d-flex flex-row align-items-start justify-content-end">
			<div class="hamburger ml-auto">menu</div>
			<div class="menu_nav text-right">
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="skills.html">Skills</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="experience.html">Experience</a></li>
					<li><a href="education.html">Education</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
		</div>
	</header>

	@yield('content')


<div align='center'>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

</div>

<script src="{{ asset('contents/website')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('contents/website')}}/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{ asset('contents/website')}}/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('contents/website')}}/plugins/progressbar/progressbar.js"></script>
<script src="{{ asset('contents/website')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="{{ asset('contents/website')}}/plugins/easing/easing.js"></script>
<script src="{{ asset('contents/website')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('contents/website')}}/js/custom.js"></script>
</body>
</html>
