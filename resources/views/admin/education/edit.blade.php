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
                    <li class="breadcrumb-item active">Edit education</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Edit education </h5>
                <a href="{{ route('education.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All education
                </a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('education.update',$data->education_slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-6 my-2">
                                <label for="edu_page_title">Page Title</label>
                                <input type="hidden" name="education_id" value="{{ $data->edu_id }}">
                                <input class="form-control" type="text" name="edu_page_title" value="{{ $data->edu_page_title }}">
                                @error('edu_page_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="edu_page_subtitle">Page Sub-Title</label>
                                <input class="form-control" type="text" name="edu_page_subtitle" value="{{ $data->edu_page_subtitle }}">
                                @error('edu_page_subtitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="edu_title">Education Title</label>
                                <input class="form-control" type="text" name="edu_title" value="{{ $data->edu_title }}">
                                @error('edu_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="col-md-6 my-2">
                            <label for="edu_subtitle">Education Sub-Title</label>
                            <input class="form-control" type="text" name="edu_subtitle" value="{{ $data->edu_subtitle }}">
                            @error('edu_subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="edu_text">Education Text</label>
                            <input class="form-control" type="text" name="edu_text" value="{{ $data->edu_text }}">
                            @error('edu_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="edu_year">Education Year</label>
                            <input class="form-control" type="text" name="edu_year" value="{{ $data->edu_year }}">
                            @error('edu_year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 my-2">
                            <label for="education_image">education Image</label>
                            <input id="education_image_input" class="form-control" type="file" name="education_image" value="{{ $data->education_image }}">
                            @error('education_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            @if ($data['edu_image'])
                            <img id="education_image_preview" style="width: 150px" class="m-auto" src="{{ asset('uploads/education/'.$data->edu_image) }}" alt="education Image">
                            @else
                            <img id="education_image_preview" style="width: 100px" class="m-auto" src="{{ asset('uploads/download.png') }}" alt="education Image">
                            @endif
                        </div>



                        <div class="col-md-7 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> education Updata
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Custom Image Upload Preview --}}
<script type="text/javascript">
    // Main Logo
    $('#education_image_input').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => {
        $('#education_image_preview').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection
