@extends('layouts.website')
@section('content')

<!-- Main Content -->

<div class="main_content">
    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
        <div class="main_subtitle">What I am good at</div>
        <div class="main_title">My Experience</div>
    </div>
    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

        <!-- Experience -->
@php
    $expe = App\Models\Experience::where('exp_status',1)->get();
@endphp
        <div class="experience">
            @foreach ($expe as $experien)
                <!-- Experience Item -->
            <div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
                <div><div class="exp_time">{{ $experien->exp_year }}</div></div>
                <div class="exp_content">
                    <div class="exp_title_container">
                        <div class="exp_title">{{ $experien->exp_title }}</div>
                        <div class="exp_subtitle">{{ $experien->exp_subtitle }}</div>
                    </div>
                    <div class="exp_text">
                        <p>{{ $experien->exp_text }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
