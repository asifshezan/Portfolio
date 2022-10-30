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
@php
    $edu = App\Models\Education::where('edu_status',1)->get();
@endphp
        <div class="education">
@foreach ($edu as $education)
    <!-- Education Item -->
    <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
        <div><div class="edu_year">{{ $education->edu_year }}</div></div>
        <div><div class="edu_image"><img src="{{asset('uploads/education/' . $education->edu_image)}}" alt=""></div></div>
        <div class="edu_content">
            <div class="edu_title_container">
                <div class="edu_title">{{ $education->edu_title }}</div>
                <div class="edu_subtitle">{{ $education->edu_subtitle }}</div>
            </div>
            <div class="edu_text">
                <p>{{ $education->edu_text }}</p>
            </div>
        </div>
    </div>

@endforeach

        </div>

    </div>
</div>

@endsection
