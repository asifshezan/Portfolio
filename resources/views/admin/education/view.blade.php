@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">education</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">education</a></li>
                    <li class="breadcrumb-item active">View education</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>education Information</h5>
                <a href="{{ route('education.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All education
                </a>
            </div>
            <div class="card-body">
                <div class="p-4 border rounded">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Page-Title :</th>
                                    <td>{{ $data['edu_page_title'] }}</td>
                                </tr>
                                <tr>
                                    <th>Page Sub-Title :</th>
                                    <td>{{ $data['edu_page_subtitle'] }}</td>
                                </tr>
                                <tr>
                                    <th>Year :</th>
                                    <td>{{ $data['edu_year'] }}</td>
                                </tr>
                                <tr>
                                    <th>Edu. Title :</th>
                                    <td>{{ $data['edu_title'] }}</td>
                                </tr>
                                <tr>
                                    <th>Edu. Sub-Title :</th>
                                    <td>{{ $data['edu_subtitle'] }}</td>
                                </tr>
                                <tr>
                                    <th>Text :</th>
                                    <td>{{ $data['edu_text'] }}</td>
                                </tr>
                                <tr>
                                    <th>Edu. Image :</th>
                                    <td>
                                        @if ($data->edu_image)
                                            <img height="40" src="{{ asset('uploads/education/'.$data->edu_image)}}" />
                                        @else
                                            <img height="50" src="{{ asset('uploads/download.png')}}" />
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
