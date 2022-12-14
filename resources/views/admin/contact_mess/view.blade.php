@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Contact Message</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contact Message</a></li>
                    <li class="breadcrumb-item active">View Contact Message</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Contact Message</h5>
                <a href="{{ route('contact_mess.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Contact Message
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
                                    <th>Name :</th>
                                    <td>{{ $data['cm_name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Email :</th>
                                    <td>{{ $data['cm_email'] }}</td>
                                </tr>
                                <tr>
                                    <th>Subject :</th>
                                    <td>{{ $data['cm_phone'] }}</td>
                                </tr>
                                <tr>
                                    <th>Phone :</th>
                                    <td>{{ $data['cm_subject'] }}</td>
                                </tr>
                                <tr>
                                    <th>Message :</th>
                                    <td>{{ $data['cm_message'] }}</td>
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
