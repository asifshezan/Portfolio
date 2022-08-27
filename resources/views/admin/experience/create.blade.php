@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">experience</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">experience</a></li>
                    <li class="breadcrumb-item active">Create experience</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Create experience </h5>
                <a href="{{ route('experience.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All experience</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 my-2">
                                <label for="exp_page_title">Experience Page Title</label>
                                <input class="form-control" type="text" name="exp_page_title" value="{{ old('exp_page_title') }}">
                                @error('exp_page_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="exp_page_subtitle">Experience Page Sub-Title</label>
                                <input class="form-control" type="text" name="exp_page_subtitle" value="{{ old('exp_page_subtitle') }}">
                                @error('exp_page_subtitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="exp_year">Experience Year</label>
                                <input class="form-control" type="text" name="exp_year" value="{{ old('exp_year') }}">
                                @error('exp_year')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="exp_title">Experience Title</label>
                                <input class="form-control" type="text" name="exp_title" value="{{ old('exp_title') }}">
                                @error('exp_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="exp_subtitle">Experience Sub-Title</label>
                                <input class="form-control" type="text" name="exp_subtitle" value="{{ old('exp_subtitle') }}">
                                @error('exp_subtitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="exp_text">Experience Text</label>
                                <input class="form-control" type="text" name="exp_text" value="{{ old('exp_text') }}"><br>
                                @error('exp_text')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Experience Save
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
    // Category Image
    $('#partner_image_input').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => {
        $('#partner_image_preview').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection
