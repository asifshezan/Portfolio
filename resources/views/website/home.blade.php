@extends('layouts.website')
@section('content')

<div class="content_container">
    <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

        <!-- General Information -->
        <div class="general_info d-flex flex-xl-column flex-md-row flex-column">
            <div>
                <div class="general_info_image">
                    <div class="background_image" style="background-image:url({{ asset('contents/website')}}/images/smith.jpg)"></div>
                    <div class="header_button_2">
                        <a href="#">Available for freelance work</a>
                        <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('contents/website')}}/images/download.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="general_info_content">
                <div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
                    <div class="general_info_title">General Information</div>
                    <ul class="general_info_list">
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ asset('contents/website')}}/images/icon_1.png" alt=""></div>
                            <div class="general_info_text">Name: <span>Jeremy Smith</span></div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
                            <div class="general_info_text">Location: <span>London UK</span></div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ asset('contents/website')}}/images/icon_2.png" alt=""></div>
                            <div class="general_info_text">Date of Birth: <span>August 25, 1991</span></div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ asset('contents/website')}}/images/icon_3.png" alt=""></div>
                            <div class="general_info_text"><a href="mailto:contact@linque.com?subject=Job_Inquiry">contactme@templatename.com</a></div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ asset('contents/website')}}/images/icon_4.png" alt=""></div>
                            <div class="general_info_text">+76 6524 567862 763</div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ asset('contents/website')}}/images/icon_5.png" alt=""></div>
                            <div class="general_info_text"><a href="mailto:contact@linque.com">www.mytemplatename.com</a></div>
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

        <!-- Main Content -->

        <div class="main_content">
            <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                <div class="main_subtitle">HTML5 & CSS Developer</div>
                <div class="main_title">Jeremy Smith</div>
            </div>
            <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                <div class="about_content">
                    <div class="about_title">Description</div>
                    <div class="about_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit.</p>
                    </div>

                    <!-- Loaders -->

                    <div class="loaders clearfix">

                        <!-- Loader -->
                        <div class="loader_container">
                            <div class="loader" data-perc="0.75"></div>
                            <div class="loader_content text-center">
                                <div class="loader_title">intuition</div>
                                <div class="loader_subtitle">Etiam nec odio vestibulum est.</div>
                            </div>
                        </div>

                        <!-- Loader -->
                        <div class="loader_container">
                            <div class="loader" data-perc="0.83"></div>
                            <div class="loader_content text-center">
                                <div class="loader_title">creativity</div>
                                <div class="loader_subtitle">Odio vestibulum est mattis.</div>
                            </div>
                        </div>

                        <!-- Loader -->
                        <div class="loader_container">
                            <div class="loader" data-perc="0.25"></div>
                            <div class="loader_content text-center">
                                <div class="loader_title">pure luck</div>
                                <div class="loader_subtitle">Vestibulum est mattis effic.</div>
                            </div>
                        </div>

                        <!-- Loader -->
                        <div class="loader_container">
                            <div class="loader" data-perc="0.95"></div>
                            <div class="loader_content text-center">
                                <div class="loader_title">awesomeness</div>
                                <div class="loader_subtitle">Vestibulum est mattis effic.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
