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
						<div class="about_text center">
							<h4> {{ $about->ab_details }} </h4>
						</div>
					</div>

				</div>
                <div class="about_button">
                    <a href="https://www.fiverr.com/asifwebdev">Available for freelance work</a>
                    <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{asset('contents/website')}}/images/download.png" alt=""></div>
                </div>
			</div>
@endsection
