@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ url('dashboard/basic_info/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card_header">
                    <div class="row">
                        <div class="col-md-8 card_header_title">
                            <h3><b>Basic Information</b></h3></div>
                    </div>
                </div>
                <div class="card-body card_body">
                    <div class="row mb-3 {{$errors->has('info_name') ? 'has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Name:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_name" value="{{ $basic_all->info_name }}">
                            @if ($errors->has('info_name'))
                            <span class="error">{{ $errors->first('info_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_location') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Location:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_location" value="{{ $basic_all->info_location }}">
                            @if ($errors->has('info_location'))
                            <span class="error">{{ $errors->first('info_location') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_birth') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Birth Date:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_birth" value="{{ $basic_all->info_birth }}">
                            @if ($errors->has('info_birth'))
                            <span class="error">{{ $errors->first('info_birth') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_email') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Email:</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control form_control" name="info_email" value="{{ $basic_all->info_email }}">
                            @if ($errors->has('info_email'))
                            <span class="error">{{ $errors->first('info_email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_phone') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_phone" value="{{ $basic_all->info_phone }}">
                            @if ($errors->has('info_phone'))
                            <span class="error">{{ $errors->first('info_phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_website') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Website:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_website" value="{{ $basic_all->info_website }}">
                            @if ($errors->has('info_website'))
                            <span class="error">{{ $errors->first('info_website') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_facebook') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Facebook:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_facebook" value="{{ $basic_all->info_facebook }}">
                            @if ($errors->has('info_facebook'))
                            <span class="error">{{ $errors->first('info_facebook') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_instagram') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Instagram:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_instagram" value="{{ $basic_all->info_instagram }}">
                            @if ($errors->has('info_instagram'))
                            <span class="error">{{ $errors->first('info_instagram') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_linkedin') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Linkedin:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_linkedin" value="{{ $basic_all->info_linkedin }}">
                            @if ($errors->has('info_linkedin'))
                            <span class="error">{{ $errors->first('info_linkedin') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 {{$errors->has('info_google') ? ' has-error':''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Google:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" name="info_google" value="{{ $basic_all->info_google }}">
                            @if ($errors->has('info_google'))
                            <span class="error">{{ $errors->first('info_google') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Image</label>
                        <div class="col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form_control" name="info_image">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            @if ($basic_all->info_image!='')
                                <img src="{{ asset('uploads/basics/'.$basic_all->info_image) }}" alt="image" class="img-fluid" width="40">
                                @else
                                <img src="{{ asset('uploads/download.png')}}" class="img-fluid" width="40">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer card_footer bg-dark text-center">
                    <button class="btn btn-secondary" type="submit">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
