@extends('layouts.website')
@section('content')

			<!-- Main Content -->

			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">What I am good at</div>
					<div class="main_title">My Portfolio</div>
				</div>

				<!-- Sorting -->
				<div class="portfolio_categories button-group filters-button-group">
					<ul>
						<li class="portfolio_category active is-checked" data-filter="*">All</li>
						<li class="portfolio_category" data-filter=".p_design">Design</li>
						<li class="portfolio_category" data-filter=".p_photography">Photography</li>
						<li class="portfolio_category" data-filter=".p_brand">Brand Identity</li>
					</ul>
				</div>

				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="portfolio_grid grid clearfix">

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_design">
							<img src="{{asset('contents/website')}}/images/portfolio_1.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Design</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_photography">
							<img src="{{asset('contents/website')}}/images/portfolio_2.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Photography</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_brand">
							<img src="{{asset('contents/website')}}/images/portfolio_3.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Brand Identity</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_design">
							<img src="{{asset('contents/website')}}/images/portfolio_4.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Design</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_photography">
							<img src="{{asset('contents/website')}}/images/portfolio_5.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Photography</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_brand">
							<img src="{{asset('contents/website')}}/images/portfolio_6.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Brand Identity</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>
					</div>

				</div>
			</div>
            @endsection
