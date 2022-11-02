@extends('layouts.website')
@section('content')

<!-- Main Content -->
@php
    $skill = App\Models\Skill::where('skill_status',1)->firstOrFail();
@endphp
<div class="main_content">
    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
        <div class="main_subtitle">{{ $skill->skill_subtitle }}</div>
        <div class="main_title">{{ $skill->skill_title }}</div>
    </div>
    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

        <!-- Skills Content -->
        <div class="skills">
            <div class="skills_text">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10 center">
                            <h4>{{ $skill->skill_details }}</h4>
                        </div>
                        <div class="col-xl-1">
                            {{-- <p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem.
                                Fusce id ligula non risus mollis consectetur. Nam lobortis,
                                erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.
                                Sed a est a quam mattis suscipit. Proin et faucibus diam.</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Bars -->
            <div class="progress_bars">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">HTML 5</div>
                                <div id="skill_1_pbar" class="skill_barss progressbar_text" data-perc="1" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">CSS</div>
                                <div id="skill_2_pbar" class="skill_barss" data-perc="1" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">Bootstrap 5</div>
                                <div id="skill_3_pbar" class="skill_barss" data-perc="0.98" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">PHP</div>
                                <div id="skill_4_pbar" class="skill_barss" data-perc="0.65" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">Laravel</div>
                                <div id="skill_5_pbar" class="skill_barss" data-perc="0.75" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="col-xl-4 col-lg-6 pb_col">
                            <div class="pb_item">
                                <div class="p_bar_title">MySql</div>
                                <div id="skill_6_pbar" class="skill_barss" data-perc="0.70" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Milestones -->

            <div class="milestones clearfix">

                <!-- Milestone -->
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('contents/website')}}/images/icon_6.png" alt=""></div>
                    <div class="milestone_counter" data-end-value="03">0</div>
                    <div class="milestone_text">Years of Experience</div>
                </div>

                <!-- Milestone -->
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('contents/website')}}/images/icon_7.png" alt=""></div>
                    <div class="milestone_counter" data-end-value="3" data-sign-before="">0</div>
                    <div class="milestone_text">Happy Clients</div>
                </div>

                <!-- Milestone -->
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('contents/website')}}/images/icon_8.png" alt=""></div>
                    <div class="milestone_counter" data-end-value="684" data-sign-after="">0</div>
                    <div class="milestone_text">Followers on FB</div>
                </div>

                <!-- Milestone -->
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('contents/website')}}/images/icon_9.png" alt=""></div>
                    <div class="milestone_counter" data-end-value="5">0</div>
                    <div class="milestone_text">Finished Projects</div>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection
