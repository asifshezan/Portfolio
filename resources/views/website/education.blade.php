@extends('layouts.website')
@section('content')
<!-- Main Content -->

<div class="main_content">
    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
        <div class="main_subtitle">What I am good at</div>
        <div class="main_title">My Education</div>
    </div>
    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

        <!-- Education -->

        <div class="education">

            <!-- Education Item -->
            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                <div><div class="edu_year">2010</div></div>
                <div><div class="edu_image"><img src="{{asset('contents/website')}}/images/edu_1.png" alt=""></div></div>
                <div class="edu_content">
                    <div class="edu_title_container">
                        <div class="edu_title">University of Colorado</div>
                        <div class="edu_subtitle">Developer Diploma PhD</div>
                    </div>
                    <div class="edu_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                    </div>
                </div>
            </div>

            <!-- Education Item -->
            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                <div><div class="edu_year">2008</div></div>
                <div><div class="edu_image"><img src="{{asset('contents/website')}}/images/edu_2.png" alt=""></div></div>
                <div class="edu_content">
                    <div class="edu_title_container">
                        <div class="edu_title">Graphic School</div>
                        <div class="edu_subtitle">Graphic Design Course</div>
                    </div>
                    <div class="edu_text">
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                    </div>
                </div>
            </div>

            <!-- Education Item -->
            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                <div><div class="edu_year">2007</div></div>
                <div><div class="edu_image"><img src="{{asset('contents/website')}}/images/edu_3.png" alt=""></div></div>
                <div class="edu_content">
                    <div class="edu_title_container">
                        <div class="edu_title">Colorado High School</div>
                        <div class="edu_subtitle">Bachelor Degree - Developer</div>
                    </div>
                    <div class="edu_text">
                        <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
