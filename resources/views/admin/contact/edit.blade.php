@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Contact</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                    <li class="breadcrumb-item active">Update Contact</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Update Contact </h5>
                <a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Contact</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('contact.update',$data->cont_id) }}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 my-2">
                                <label for="cont_title">Title</label>
                                <input type="hidden" class="cont_id" value={{ $data['cont_id']}}>
                                <input class="form-control" type="text" name="cont_title" value="{{ $data['cont_title'] }}">
                                @error('cont_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="cont_subtitle">Sub-Title</label>
                                <input class="form-control" type="text" name="cont_subtitle" value="{{ $data['cont_subtitle'] }}">
                                @error('cont_subtitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="cont_details">Details</label>
                                {{-- <textarea cols="135" rows="4" name="cont_details" value="{{ old('cont_details') }}"></textarea> --}}
                                <input class="form-control" type="text" name="cont_details" value="{{ $data['cont_details'] }}">
                                @error('cont_details')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="cont_button">Button</label>
                                <input class="form-control" type="text" name="cont_button" value="{{ $data['cont_button'] }}">
                                @error('cont_button')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Contact Save
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
