@extends('layouts.website')
@section('content')

			<!-- Main Content -->

			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">What I am good at</div>
					<div class="main_title">My Portfolio</div>
				</div>

				<!-- Sorting -->
                @php
                $alldata = App\Models\Portfolio_Category::where('port_cate_status',1)->get();
                @endphp
				<div class="portfolio_categories button-group filters-button-group">
					<ul>
						<li class="portfolio_category active is-checked" data-filter="*">All</li>
                        @foreach ($alldata as $data )
                        @php
                            $images = App\Models\Gallery::where('portfolio_id', $data->port_cate_id )->get();
                        @endphp
                        <li class="portfolio_category" data-filter=".xyz_{{ $data->port_cate_id}}">{{ $data->port_cate_title }}</li>
                        @endforeach
					</ul>
				</div>

				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="portfolio_grid grid clearfix">

                            <!-- Portfolio Item -->
						@foreach ($images as $image)
                        <div class="grid-item portfolio_item xyz_{{ $image->portfolio_id}}">
							<img src="{{asset('uploads/portfolio_category/'.$image->image)}}" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Design</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>
                        @endforeach

					</div>
				</div>
			</div>
            @endsection




            {{-- <!-- Portfolio Item -->
						<div class="grid-item portfolio_item w_dev">
							<img src="{{ asset('uploads/portfolio_category/'.$data->port_cate_image)}}" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Photography</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div> --}}
