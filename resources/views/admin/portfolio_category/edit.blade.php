@extends('layouts.admin')
@section('content')
{{-- @dd($data->galleris) --}}
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Portfolio Category</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio Category</a></li>
                    <li class="breadcrumb-item active">Edit Portfolio Category</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Edit Portfolio Category </h5>
                <a href="{{ route('portfolio_category.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Portfolio Category
                </a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('portfolio_category.update',$data->port_cate_slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-12 my-2">
                                <label for="port_cate_title">Portfolio Category Title</label>
                                <input type="hidden" name="port_cate_id" value="{{ $data->port_cate_id }}">
                                <input class="form-control" type="text" name="port_cate_title" value="{{ $data->port_cate_title }}">
                                @error('port_cate_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        <div class="col-md-12 my-2 pb-4">
                            <label for="port_cate_image">Portfolio Category Image</label>
                            <input id="port_cate_image_input" class="form-control" type="file" name="port_cate_image[]" multiple>
                            @error('port_cate_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @php
                            $galleris = App\Models\Gallery::where('status',1)->where('portfolio_id',$data->port_cate_id )->get();
                        @endphp

                    @foreach ($galleris as $gallery)
                    <div class="col-md-2">
                        <a href="{{ route('portfolio.single.image.remove',$gallery->gallery_id) }}" class="btn btn-sm btn-danger">X</a>
                        <img id="education_image_preview" style="width: 150px" class="m-auto" src="{{ asset('uploads/portfolio_category/'.$gallery->image) }}" alt="education Image">
                        {{-- <img id="port_cate_image_preview" style="width: 100px" class="m-auto" src="{{ asset('uploads/download.png') }}" alt="Image"> --}}
                    </div>
                    @endforeach
                        <div class="col-md-7 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Portfolio Category Updata
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
