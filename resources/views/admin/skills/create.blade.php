@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Skills</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Skills</a></li>
                    <li class="breadcrumb-item active">Create Skills</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Create Skills </h5>
                <a href="{{ route('skill.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Skills</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 my-2">
                                <label for="skill_title">Title</label>
                                <input class="form-control" type="text" name="skill_title" value="{{ old('skill_title') }}">
                                @error('skill_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="skill_subtitle">Sub-Title</label>
                                <input class="form-control" type="text" name="skill_subtitle" value="{{ old('skill_subtitle') }}">
                                @error('skill_subtitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-7 my-2">
                                <label for="skill_details">Details</label>
                                {{-- <textarea cols="135" rows="4" name="ab_details" value="{{ old('ab_details') }}"></textarea> --}}
                                <input class="form-control" type="text" name="skill_details" value="{{ old('skill_details') }}">
                                @error('skill_details')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="col-md-6 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Skills Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
