@extends('layouts.website')
@section('content')

	<!-- Main Content -->

    <div class="main_content">
        <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
            <div class="main_subtitle">What I am good at</div>
            <div class="main_title">My Services</div>
        </div>
        <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

            <!-- Services -->

            <div class="services">
                <div class="services_container d-flex flex-row flex-wrap align-items-start justify-content-start">

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_10.png" alt=""></div></div>
                            <div class="service_title">Fast coding service</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_11.png" alt=""></div></div>
                            <div class="service_title">Documentations</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_12.png" alt=""></div></div>
                            <div class="service_title">Online presentations</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_13.png" alt=""></div></div>
                            <div class="service_title">Online shops</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_14.png" alt=""></div></div>
                            <div class="service_title">Video footages</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon"><img src="{{asset('contents/website')}}/images/icon_15.png" alt=""></div></div>
                            <div class="service_title">Stock photos</div>
                        </div>
                        <div class="service_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame.</p>
                        </div>
                    </div>

                </div>

                <!-- Quote Button -->
                <div class="services_button"><a href="#">Ask for a Quote</a></div>

            </div>

        </div>
    </div>

    @endsection
