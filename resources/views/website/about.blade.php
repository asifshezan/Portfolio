@extends('layouts.website')
@section('content')


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
									<div class="loader_title">pure luck</div>
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
                            <div class="about_button">
                                <a href="{{ asset('contents/website/Asif Ahamed CV.pdf')}}" target="_blank">Download CV</a>
                                <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
                            </div>

						</div>
					</div>



				</div>

			</div>
@endsection
