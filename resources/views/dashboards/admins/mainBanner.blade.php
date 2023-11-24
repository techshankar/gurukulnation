@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Homepage Banners')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home Page Main Banners</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Home Page Main Banners</li>
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
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Upload Banners</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent" id="packers_n_movers">
                                <form class="form-horizontal" action="{{ route('admin.upload_main_banners') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $homepagemainbanners->id }}">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Title One</label>
                                                <input type="text" class="form-control" id="inputName" name="title1" required value="{{ $homepagemainbanners->title1 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Title Two</label>
                                                <input type="text" class="form-control" id="inputName" name="title2" required value="{{ $homepagemainbanners->title2 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Title Three</label>
                                                <input type="text" class="form-control" id="inputName" name="title3" required value="{{ $homepagemainbanners->title3 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Content One</label>
                                                <input type="text" class="form-control" id="inputName" name="content1" required value="{{ $homepagemainbanners->content1 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Content Two</label>
                                                <input type="text" class="form-control" id="inputName" name="content2" required value="{{ $homepagemainbanners->content2 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-4 col-form-label">Content Three</label>
                                                <input type="text" class="form-control" id="inputName" name="content3" required value="{{ $homepagemainbanners->content3 }}">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Banner One <strong>👉</strong></label>
                                                <input type="file" class="form-control" id="inputName" name="banner1" >
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ $homepagemainbanners->banner1 }}" alt="" style="height:210px; width: 508px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-lg-6">
                                            <img src="{{ $homepagemainbanners->banner2 }}" alt="" style="height:210px; width: 508px;">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label"><strong>👈</strong> Banner Two</label>
                                                <input type="file" class="form-control" id="inputName" name="banner2" >
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Banner Three <strong>👉</strong></label>
                                                <input type="file" class="form-control" id="inputName" name="banner3" >
                                                <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{ $homepagemainbanners->banner3 }}" alt="" style="height:210px; width: 508px;">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Banner Image</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" id="inputName" name="banner" required>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div> -->
                                    
                                    <!-- <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-5">
                                            <select name="status" class="form-control" id="inputName">
                                                <option value="1">Active</option>
                                                <option value="0">In-Active</option>
                                            </select>
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div> -->

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