<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{asset('contents/admin')}}/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{asset('contents/website')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/styles/responsive.css">
</head>
<body>
<div class="super_container">
	<!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">Asif<span>.</span>Portfolio</div>
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
					<a href="https://www.fiverr.com/asifwebdev" target="_blank">Available for freelance work</a>
					<div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
				</div>
			</div>
			<!-- Menu -->
	<div class="menu">
		<div class="menu_content d-flex flex-row align-items-start justify-content-end">
			<div class="hamburger ml-auto">menu</div>
			<div class="menu_nav text-right">
				<ul>
					<li class="{{ request()->routeIs('website.about') ? 'active' : '' }}"><a href="{{ route('website.about')}}">About</a></li>
					<li class="{{ request()->routeIs('website.skill') ? 'active' : '' }}"><a href="{{ route('website.skill')}}">Skills</a></li>
					<li class="{{ request()->routeIs('website.service') ? 'active' : '' }}"><a href="{{ route('website.service')}}">Services</a></li>
					<li class="{{ request()->routeIs('website.experience') ? 'active' : '' }}"><a href="{{ route('website.experience')}}">Experience</a></li>
					<li class="{{ request()->routeIs('website.education') ? 'active' : '' }}"><a href="{{ route('website.education')}}">Education</a></li>
					<li class="{{ request()->routeIs('website.portfolio') ? 'active' : '' }}"><a href="{{ route('website.portfolio')}}">Portfolio</a></li>
					<li class="{{ request()->routeIs('website.contact') ? 'active' : '' }}"><a href="{{ route('website.contact')}}">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
		</div>
	</header>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
            @php
            $basic_all = App\Models\Basic_Info::where('info_status',1)->firstOrFail();
        	@endphp
			<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
				<div>
					<div class="general_info_image">
						<div class="background_image" style="background-image:url({{asset('uploads/basics/'. $basic_all->info_image)}})"></div>
						<div class="header_button_2">
							<a href="https://www.fiverr.com/asifwebdev">Available for freelance work</a>
							<div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="general_info_content">
					<div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
						<div class="general_info_title">General Information</div>
						<ul class="general_info_list">
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_1.png" alt=""></div>
								<div class="general_info_text">Name: <span>{{ $basic_all->info_name }}</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><i class="fa fa-map-marker"></i></div>
                                {{-- <img src="{{asset('contents/website')}}/images/location.png" alt=""> --}}
								<div class="general_info_text">Location: <span>{{ $basic_all->info_location }}</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_2.png" alt=""></div>
								<div class="general_info_text">Date of Birth: <span>{{ $basic_all->info_birth }}</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_3.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:contact@linque.com?subject=Job_Inquiry">{{ $basic_all->info_email }}</a></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_4.png" alt=""></div>
								<div class="general_info_text"><a href="tel:+880 1516788837">{{ $basic_all->info_phone }}</a></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('contents/website')}}/images/icon_5.png" alt=""></div>
								<div class="general_info_text"><a href="https://asifwebdev.xyz" target="_blank">{{ $basic_all->info_website }}</a></div>
							</li>
						</ul>
						<!-- Social -->
						<div class="social_container">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="{{ $basic_all->info_github}}" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $basic_all->info_linkedin }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $basic_all->info_facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="{{ $basic_all->info_instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Content -->
            @php
            $about = App\Models\About::where('ab_status',1)->firstOrFail();
            @endphp
			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">{{ $about->ab_subtitle }}</div>
					<div class="main_title">{{ $about->ab_title }}</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="about_content">
						<div class="about_title">Description</div>
						<div class="col-md-11 about_text">
							<h4> {{ $about->ab_details }} </h4>
						</div>
                        <!-- Loaders -->
						<div class="loaders loaderr clearfix">
							<!-- Loader -->
							<div class="loader_container ">
								<div class="loader" data-perc="0.75"></div>
								<div class="loader_content text-center">
									<div class="loader_title">intuition</div>
									{{-- <div class="loader_subtitle">Etiam nec odio vestibulum est.</div> --}}
								</div>
							</div>
							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.85"></div>
								<div class="loader_content text-center">
									<div class="loader_title">creativity</div>
									{{-- <div class="loader_subtitle">Odio vestibulum est mattis.</div> --}}
								</div>
							</div>
							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.80"></div>
								<div class="loader_content text-center">
									<div class="loader_title">sincerity</div>
									{{-- <div class="loader_subtitle">Vestibulum est mattis effic.</div> --}}
								</div>
							</div>
							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.95"></div>
								<div class="loader_content text-center">
									<div class="loader_title">awesomeness</div>
									{{-- <div class="loader_subtitle">Vestibulum est mattis effic.</div> --}}
								</div>
							</div>
                            <div class="about_buttonn">
                                <a href="{{ asset('contents/website/Asif Ahamed CV.pdf')}}" target="_blank">Download CV</a>
                                <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div align='center'>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> || All rights reserved by <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://www.facebook.com/asif.shezan" target="_blank">Asif Shezan</a>
        </div>
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
<script src="{{asset('contents/website')}}/js/custom.js"></script>
</body>
</html>
