@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">About</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                    <li class="breadcrumb-item active">Edit About</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Edit About </h5>
                <a href="{{ route('about.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All About
                </a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('about.update',$data->ab_slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                        <div class="col-md-6 my-2">
                            <label for="ab_title">About Title</label>
                            <input type="hidden" name="ab_id" value="{{ $data->ab_id }}">
                            <input class="form-control" type="text" name="ab_title" value="{{ $data->ab_title }}">
                            @error('ab_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="ab_subtitle">About Sub-Title</label>
                            <input class="form-control" type="text" name="ab_subtitle" value="{{ $data->ab_subtitle }}">
                            @error('ab_subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="ab_details">About Details</label>
                            <input class="form-control" type="text" name="ab_details" value="{{ $data->ab_details }}">
                            @error('ab_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-7 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Updata About
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
