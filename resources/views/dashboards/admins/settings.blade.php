@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Site Settings')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Site Settings</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
<!-- <img src="uploads/{{ Session::get('file') }}"> -->
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Site Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="">
                                <form class="form-horizontal" action="{{ route('admin.settings_update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="@if(!empty($settings->id)){{ $settings->id }}@else @endif">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Meta Title</label>
                                            <input type="text" class="form-control" name="meta_title" required value="@if(!empty($settings->id)){{ $settings->meta_title }}@else @endif">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Meta Description</label>
                                            <input type="text" class="form-control" name="meta_desc" required value="@if(!empty($settings->id)){{ $settings->meta_desc }}@else @endif">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Whatshop Link</label>
                                            <input type="url" class="form-control" name="whatsp" required value="@if(!empty($settings->id)){{ $settings->whatsp }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Instagram Link</label>
                                            <input type="url" class="form-control" name="insta" required value="@if(!empty($settings->id)){{ $settings->insta }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Twitter Link</label>
                                            <input type="url" class="form-control" name="twitter" required value="@if(!empty($settings->id)){{ $settings->twitter }}@else @endif">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Facebook Link</label>
                                            <input type="url" class="form-control" name="fb" required value="@if(!empty($settings->id)){{ $settings->fb }}@else @endif">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Privacy Policy</label>
                                            <textarea name="privacy_policy" class="form-control">@if(!empty($settings->id)){{ $settings->privacy_policy }}@else @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="inputName" class="col-sm-6 col-form-label">Terms & Conditions</label>
                                            <textarea name="termsncondtions" class="form-control">@if(!empty($settings->id)){{ $settings->termsncondtions }}@else @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-6">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection