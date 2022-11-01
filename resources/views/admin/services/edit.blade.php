@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Services</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                    <li class="breadcrumb-item active">Edit Services</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Edit Services </h5>
                <a href="{{ route('service.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Services
                </a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('service.update',$data->ser_slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                        <div class="col-md-6 my-2">
                            <label for="ser_icon">Service Icon</label>
                            <input class="form-control" type="file" name="ser_image" value="{{ $data->ser_image }}">
                            @error('ser_icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            @if ($data['ser_image'])
                            <img id="service_image_preview" style="width: 150px" class="m-auto" src="{{ asset('uploads/service/' . $data->ser_image) }}" alt="service Image">
                            @else
                            <img id="service_image_preview" style="width: 100px" class="m-auto" src="{{ asset('uploads/download.png') }}" alt="service Image">
                            @endif
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="ser_title">Service Title</label>
                            <input type="hidden" name="ser_id" value="{{ $data->ser_id }}">
                            <input class="form-control" type="text" name="ser_title" value="{{ $data->ser_title }}">
                            @error('ser_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="ser_text">Service Text</label>
                            <input class="form-control" type="text" name="ser_text" value="{{ $data->ser_text }}">
                            @error('ser_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-7 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Updata Services
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
