@extends('layouts.website')
@section('content')

	<!-- Main Content -->
@php
    $all = App\Models\Service::where('ser_status',1)->orderBy('ser_id','ASC')->get();
@endphp
    <div class="main_content">
        <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
            <div class="main_subtitle">What I am good</div>
            <div class="main_title">My Services</div>
        </div>
        <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

            <!-- Services -->

            <div class="services">
                <div class="services_container d-flex flex-row flex-wrap align-items-start justify-content-start">
                    @foreach ($all as $sers)
                        <!-- Service -->
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div><div class="service_icon">{{ $sers['ser_image'] }}</div></div>
                            <div class="service_title">{{ $sers['ser_title']  }}</div>
                        </div>
                        <div class="service_text">
                            <p>{{ $sers->ser_text }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @endsection
